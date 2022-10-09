<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('welcome', function () {
    return view('welcome');
})->name("users.login.form");

Route::group(['namespace' =>'Admin'], function() {

    Route::get('register', function () {
      
        return view('admin.auth.register');
    });
    
    Route::get('login','AuthController@login')->name('login');//admin.auth.login
    Route::post('postLogin','AuthController@postLogin')->name('postLogin');

    route::middleware('auth:admin')->group(function(){


    Route::get('/', function () {
        return view('admin.index');
    })->name('index');


    Route::middleware('auth:admin')->group(function(){
            Route::prefix('doctors')->group(function () {
                Route::get('doctor-list', function () {
                    return view('admin.doctors.doctors');
                });
                Route::get('add-doctor', function () {
                    return view('admin.doctors.add-doc');
                });
                Route::get('add-doctor-details', function () {
                    return view('admin.doctors.add-doctor-details');
                });
            });

            Route::prefix('patients')->group(function () {
                Route::get('patients-list', function () {
                    return view('admin.patients.patient');
                });
            });

            Route::prefix('specializations')->group(function () {
                Route::get('specializations-list', function () {
                    return view('admin.specializations.specialities');
                });
                Route::get('add-specializations', function () {
                    return view('admin.specializations.add-specialist');
                });
            });
            Route::prefix('esteshara')->group(function () {
                Route::get('esteshara-list', function () {
                    return view('admin.estsharas.estshara-list');
                });
                Route::get('esteshara-details', function () {
                    return view('admin.estsharas.estshara-details');
                });
            });
            Route::prefix('reviews')->group(function () {
                Route::get('reviews-list', function () {
                    return view('admin.reviews.reviews');
                });
            });
            Route::prefix('transactions')->group(function () {
                Route::get('transactions-list', function () {
                    return view('admin.payments.transactions');
                });
                Route::get('request-withdraw', function () {
                    return view('admin.payments.request-withdraw');
                });
            });
            Route::prefix('providers')->group(function () {
                Route::get('provider-list', function () {
                    return view('admin.providers.pharmacist-list');
                });
                Route::get('provider-add', function () {
                    return view('admin.providers.pharmacy');
                });
                Route::get('category', function () {
                    return view('admin.categories.cats');
                });
            });
            Route::prefix('services')->group(function () {
                Route::get('service-add', function () {
                    return view('admin.services.add-product');
                });
                Route::get('service-list', function () {
                    return view('admin.services.products');
                });
            });
            Route::prefix('orders')->group(function () {
                Route::get('order-details', function () {
                    return view('admin.orders.order-detail');
                });
                Route::get('order-list', function () {
                    return view('admin.orders.orders');
                });
            });
            Route::prefix('credintails')->group(function () {
                Route::get('privacy', function () {
                    return view('admin.credintails.privacy');
                });
                Route::get('problems', function () {
                    return view('admin.credintails.problems');
                });
                Route::get('terms', function () {
                    return view('admin.credintails.terms');
                });
            });

            Route::get('settings', function () {
                return view('admin.settings.setting');
            });
        });
});
});


