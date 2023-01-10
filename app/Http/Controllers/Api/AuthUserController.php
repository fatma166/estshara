<?php
namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use Illuminate\Support\Facades\Hash;
use App\Models\CountryTranslation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\AuthUserRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\VerifyRequest;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Resources\UserResource;
use App\Http\Resources\RoleResource;
use App\Http\Resources\CountryResource;
use Validator;
use Illuminate\Support\Facades\DB;

use Twilio\Rest\Client;
use Exception;
class AuthUserController extends Controller
{


    public function login(Request $request){
        $req = Validator::make($request->all(), [
            'phone'=>'required',
            'password'=>'required|min:6'


        ]);
        if($req->fails()){
          //  return($req->messages());
          return response()->json([
            'status' =>HTTPResponseCodes::Validation['status'],
            'data' =>$req->messages(),
            'message' =>HTTPResponseCodes::Validation['message'],
            ],HTTPResponseCodes::Validation['code']);
        }
        $validated=$request->all();
        $token=Auth::guard('api')->attempt($validated);

        if (!$token) {

                return response()->json([
                'status' =>HTTPResponseCodes::UnAuth['status'],
                'data' =>[],
                'message' => HTTPResponseCodes::UnAuth['message'],
                ],HTTPResponseCodes::UnAuth['code']);
        }

        $user = Auth::guard('api')->user();
        $user['token']= $token;
        return response()->json([
                'status' =>HTTPResponseCodes::Sucess['status'],
                'data' => new UserResource($user),
                'message'=> HTTPResponseCodes::Sucess['message'],
               

        ],HTTPResponseCodes::Sucess['code']);

    }
/**
 * 
 * 
 */
public function register(RegisterRequest $request) {

    $req= Validator::make($request->all(), [
        'name' => 'required|min:4',
        'last_name' => 'required|min:4',
        'phone' => 'required|unique:users|min:5',
        'password' => 'required|min:6',
        'birth_date' => 'required|date',
        'role_id'   => 'required']
        );

        if($req->fails()){
            return response()->json([
                'status' =>HTTPResponseCodes::UnAuth['status'],
                'data' =>[],
                'message' => HTTPResponseCodes::UnAuth['message'],
                ],HTTPResponseCodes::UnAuth['code']);
        }
            $validated = $request->all();
            $validated ['active']=0;
            /* Get credentials from .env */
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_sid = getenv("TWILIO_SID");
            $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
            $twilio = new Client($twilio_sid, $token);
            $twilio->verify->v2->services($twilio_verify_sid)->verifications->create($validated['phone'], "sms");
            $validated['password']= Hash::make($validated['password']);
            $user= User::create($validated);
            //$token = Auth::login($user);
            return response()->json([
                    'status' => HTTPResponseCodes::Sucess['status'],
                    'message' => HTTPResponseCodes::Sucess['message'],
                    'data' => new UserResource($user),
                    //'token' => $token,

            ],HTTPResponseCodes::Sucess['code']);
            //return redirect()->route('verify')->with(['phone' => $validated['phone']]);
        
        }
    
    /**
     * 
     */
    protected function verify(VerifyRequest $request)
    {
       /* $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone' => ['required', 'string'],
        ]);*/
        
        try{
            
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create(['to'=>$data['phone'],'code'=>$data['verification_code']]);
        
            if ($verification->valid) {
                $user = tap(User::where('phone', $data['phone']))->update(['phone_isverified' => true,'active'=>1]);
                $user['token']=$token;
                /* Authenticate user */
                $token=Auth::login($user->first());
                return response()->json([
                    'status' => HTTPResponseCodes::Sucess['status'],
                    'message' => HTTPResponseCodes::Sucess['message'],
                    'data' => new UserResource($user),
                    
    
            ],HTTPResponseCodes::Sucess['code']);  
            }  
        }catch(\Exception $e){
            
            if($e->getCode()==404||$e->getCode()==20404){
                    return response()->json([
                        'status' =>HTTPResponseCodes::InvalidArguments['status'],
                        'message' => HTTPResponseCodes::InvalidArguments['message'],
                        'data' => [],
                      
        
                ],HTTPResponseCodes::InvalidArguments['code']); 
            }
        }

        return response()->json([
            'status' => HTTPResponseCodes::BadRequest['status'],
            'message' => HTTPResponseCodes::BadRequest['message'],
            'data' => [],
        
                                                    
              ], HTTPResponseCodes::BadRequest['code']);
            // return redirect()->route('home')->with(['message' => 'Phone number verified']);
        
        /* ;*/
        //  return back()->with(['phone' => $data['phone'], 'error' => 'Invalid verification code entered!']);
    }
    /**
     * 
     */
    public function logout()
    {
        echo "kl"; exit;
        Auth::guard('api')->logout();
        return response()->json([
        'status' => HTTPResponseCodes::Sucess['status'],
        'message' =>HTTPResponseCodes::Sucess['message'],
        'data'=>[]
        ],HTTPResponseCodes::Sucess['code']);
    }
    /**
     * 
     */
    public function refresh()
    {
           $user=Auth::guard('api')->user();
           $user['token']=Auth::guard('api')->refresh();
            return response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'data' => new UserResource($user),
            'message'=>HTTPResponseCodes::Sucess['message'],
            ],HTTPResponseCodes::Sucess['code']);
    }
    /**
     * 
     */
    public function get_roles(){
      
        $data=Role::all();
        return response()->json([
            'status' =>HTTPResponseCodes::Sucess['status'],
            'message'=>HTTPResponseCodes::Sucess['message'],
            'data' => RoleResource::collection($data),
            ],HTTPResponseCodes::Sucess['code']);
    }
    /**
     * 
     */
    public function get_countries(Request $request){
        $data_request=$request->all();
        $locale=$data_request['locale']??1;
       // $id=$data_request['id']??null;
        //print_r(Country::find(1)->country_translations); exit;
       
      if(isset($id)){
       
        $data=Country::with(['country_translations' => function($q)
        {
          //  $q->addSelect(['locale','name']);
        }])->find($id);
       
      //  $data=$data->country_translations->toArray();
     
      
        return response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'message'=>HTTPResponseCodes::Sucess['message'],
            'data' =>new CountryResource($data),
            ],HTTPResponseCodes::Sucess['code']);
      }
      $data=Country::with('country_translations')->get()->toArray();
        return response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'message'=>HTTPResponseCodes::Sucess['message'],
            'data' =>CountryResource::collection($data),
            ],HTTPResponseCodes::Sucess['code']);
    }

    /**
     * 
     */
   public function forgetPassword(Request $request){

        $phoneNum =$request['phone'];

        $user = User::where('phone', '=', $phoneNum)->firstOrFail();
        if($user)
        {
            Session::put('phone',$phoneNum);
           
            $user->sendToken();
            return response()->json([
                'status' => HTTPResponseCodes::Sucess['status'],
                'message'=>HTTPResponseCodes::Sucess['message'],
                'data' => new UserResource($user),
                ],HTTPResponseCodes::Sucess['code']);

        } else
        {
            return response()->json([
                'status' => HTTPResponseCodes::BadRequest['status'],
                'message'=>HTTPResponseCodes::BadRequest['message'],
                'data' => [],
                ],HTTPResponseCodes::BadRequest['code']);
           
        }

    }
    /**
     * 
     */
    public function validatePassowrd(Request $request){
        
        $req=Validator::make($request->all(),['token'=>'required','password'=>'required|min:6',
                             'confirmpass'=>'required|same:password']);
        if($req->fails()){
            return response()->json([
                'status' => HTTPResponseCodes::UnAuth['status'],
                'message'=>HTTPResponseCodes::UnAuth['message'],
                'data' => [],
                ],HTTPResponseCodes::UnAuth['code']);   
        }
        $token=$request['token'];
        $newpassword=$request['password'];

        $phoneNum=Session::get('phone');
        
        $user = User::where('phone', '=', $phoneNum)->firstOrFail();
     
        if($user && $user->validateToken($token)) {
            try{
            $this->changePassword($phoneNum,$newpassword);
            }catch(\Exception $e){
                return response()->json([
                    'status' => HTTPResponseCodes::BadRequest['status'],
                    'message'=>HTTPResponseCodes::BadRequest['message'],
                    'data' => [],
                    ],HTTPResponseCodes::BadRequest['code']);
            }
          return  response()->json([
            'status' => HTTPResponseCodes::Sucess['status'],
            'message'=>HTTPResponseCodes::Sucess['status'],
            'data' => $user,
            ],HTTPResponseCodes::Sucess['code']);

    } else
    {
        return response()->json([
            'status'=> HTTPResponseCodes::BadRequest['status'],
            'message'=>HTTPResponseCodes::BadRequest['message'],
            'data' => [],
            ],HTTPResponseCodes::BadRequest['code']);
       
    }
}
/**
 * 
 */
  protected function changePassword($phone,$newpassword){
    User::where('phone_number', '=', $phoneNum)->update(array('password'=>Hash::make($newpassword)));
  }

/**
 * 
 */
  protected function getData(){
    
   $user= Auth::guard('api')->user();

    return  response()->json([
        'status' => HTTPResponseCodes::Sucess['status'],
        'message'=>HTTPResponseCodes::Sucess['message'],
        'data' =>new UserResource($user), //UserCollection::collection($user),
        ],HTTPResponseCodes::Sucess['code']);
  }
}