<?php
namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\AuthUserRequest;
use App\Http\Requests\Api\RegisterRequest;
//use App\Http\Resources\UserCollection;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{


    public function login(Request $request){
        $req = Validator::make($request->all(), [
            'phone'=>'required',
            'password'=>'required|min:6'


        ]);
        if($req->fails()){
            return($req->messages());
        }

        $validated=$request->all();


        $token=Auth::guard('api')->attempt($validated);

        if (!$token) {

                return response()->json([
                'status' => 'error',
               ' data' =>"",
                'message' => 'Unauthorized',
                 'data'=>"",
                ], 401);
        }

        $user = Auth::guard('api')->user();
        return response()->json([
                'status' => 'success',
                'data' =>$user,
                'message'=>'login',
                'token' => $token,

        ],200);

    }
public function register(Request $request) {


$req = Validator::make($request->all(), [
    'name' => 'required|min:4',
    'last_name' => 'required|min:4',
    'phone' => 'required|unique|min:5',
    'password' => 'required|min:6',
    'birth_date' => 'required|date',
    'role_id'   => 'required']
     );
        $validated = $request->all();

            $user= User::create($validated);
            $token = Auth::login($user);
            return response()->json([
                    'status' => 'success',
                    'message' => 'User created successfully',
                    'data' => $user,
                    'token' => $token,

            ],200);
        }

        public function logout()
        {
            Auth::logout();
            return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
            'data'=>""
            ],200);
        }

    public function refresh()
    {
            return response()->json([
            'status' => 'success',
            'data' => Auth::user(),
            'token' => Auth::refresh(),

            ],200);
    }

    public function get_roles(){
      
        $data=Role::all();
        return response()->json([
            'status' => 'success',
            'data' => $data,
            ],200);
    }
    public function get_countries($locale="ar",$id=null){
      if($id){
       $country= new Country;
        $data=$country->country_translations()->where('locale',$locale)->where('country_id',$id);
        
        return response()->json([
            'status' => 'success',
            'data' => $data,
            ],200);
      }
      $country= new Country;
     
      $data= $country->country_translations();
        return response()->json([
            'status' => 'success',
            'data' => $data,
            ],200);
    }

}