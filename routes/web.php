<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocusignController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('dashboard','swinvest/dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/step1', [App\Http\Controllers\Auth\RegisterController::class, 'step1'
]);

Route::post('/step1fa', [App\Http\Controllers\Auth\RegisterController::class, 'step1fa'
]);                       
Route::get('docusign',[DocusignController::class, 'index'])->name('docusign');
Route::get('connect-docusign',[DocusignController::class, 'connectDocusign'])->name('connect.docusign');
Route::get('docusign/callback',[DocusignController::class,'callback'])->name('docusign.callback');
Route::get('sign-document',[DocusignController::class,'signDocument'])->name('docusign.sign');
Route::post('/step2fa', [App\Http\Controllers\Auth\RegisterController::class, 'step2fa'
]);  

Route::post('/step3fa', [App\Http\Controllers\Auth\RegisterController::class, 'step3fa'
]); 
Route::post('/step3', [App\Http\Controllers\Auth\RegisterController::class, 'step3'
]); 
Route::view('agreement','swinvest/agreement');

Route::post('/step4fa', [App\Http\Controllers\Auth\RegisterController::class, 'step4fa'
]); 
Route::get('/step2', [App\Http\Controllers\Auth\RegisterController::class, 'step2'
]);
Route::get('welcome-main',[App\Http\Controllers\averfication::class, 'create'
]);

Route::post('goal2',[App\Http\Controllers\investmentdetail::class, 'step1'
]);

Route::post('goal3',[App\Http\Controllers\investmentdetail::class, 'step2'
]);

Route::post('goal4',[App\Http\Controllers\investmentdetail::class, 'step3'
]);

Route::post('goal5',[App\Http\Controllers\investmentdetail::class, 'step4'
]);

Route::post('goal6',[App\Http\Controllers\investmentdetail::class, 'step5'
]);

Route::post('thankyou',[App\Http\Controllers\investmentdetail::class, 'step6'
]);




Route::post('swog',[App\Http\Controllers\swogcontroller::class, 'swog'
]);

Route::post('swog2',[App\Http\Controllers\swogcontroller::class, 'swog2'
]);

Route::post('swog3',[App\Http\Controllers\swogcontroller::class, 'swog3'
]);

Route::post('swog4',[App\Http\Controllers\swogcontroller::class, 'swog4'
]);

Route::post('swog5',[App\Http\Controllers\swogcontroller::class, 'swog5'
]);

Route::post('swog6',[App\Http\Controllers\swogcontroller::class, 'swog6'
]);

Route::post('swog7',[App\Http\Controllers\swogcontroller::class, 'swog7'
]);

Route::post('swog8',[App\Http\Controllers\swogcontroller::class, 'swog8'
]);

Route::get('swog9',[App\Http\Controllers\swogcontroller::class, 'swog9'
]);

Route::post('swog10',[App\Http\Controllers\swogcontroller::class, 'swog10'
]);

Route::post('swog13',[App\Http\Controllers\swogcontroller::class, 'swog13'
]);

Route::get('swog14',[App\Http\Controllers\swogcontroller::class, 'swog14'
]);

Route::get('swog15',[App\Http\Controllers\swogcontroller::class, 'swog15'
]);

Route::post('swog17',[App\Http\Controllers\swogcontroller::class, 'swog17'
]);
// Route::post('swog',[App\Http\Controllers\swogcontroller::class, 'swog'
// ]);
// Route::view('welcome-main','swinvest/welcome-main');

// Route::post('/registercreate', [App\Http\Controllers\Auth\RegisterController::class, 'create'
// ]);
Route::view('index','swinvest/index');
Route::view('about','swinvest/about');
// Route::view('login','swinvest/login');
Route::view('loginuser','swinvest/login');
Route::view('welcome-main2','swinvest/welcome-main');
Route::view('identity-doc2','swinvest/identity-doc2');
Route::view('yourself','swinvest/yourself');
Route::view('usertable','swinvest/usertable');

Route::view('finace-advisor','swinvest/finace-advisor');
 
Route::view('yourself','swinvest/yourself');
Route::view('investor','swinvest/investor');
Route::view('afilate','swinvest/afilate');
Route::view('welcome','swinvest/welcome');
Route::view('horizon-fund','swinvest/horizon-fund');
Route::view('portfolio','swinvest/portfolio');
Route::view('verification','swinvest/verification');
Route::view('verification2','swinvest/verification2');

Route::view('entity-verification2','swinvest/entity-verification2');
// Route::view('swog2','swinvest/swog2');
// Route::view('swog3','swinvest/swog3');
// Route::view('swog4','swinvest/swog4');
// Route::view('swog5','swinvest/swog5');
// Route::view('swog6','swinvest/swog6');
// Route::view('swog8','swinvest/swog8');
// Route::view('swog7','swinvest/swog7');
// Route::view('swog9','swinvest/swog9');
// Route::view('swog10','swinvest/swog10');
// Route::view('swog11','swinvest/swog11');
// Route::view('swog12','swinvest/swog12');
// Route::view('swog13','swinvest/swog13');
// Route::view('swog14','swinvest/swog14');
// Route::view('swog15','swinvest/swog15');
// Route::view('swog16','swinvest/swog16');
// Route::view('swog','swinvest/swog');

// Route::view('swog17','swinvest/swog17');
Route::view('finace-create-account','finace-create-account');
Route::view('goal','goal');

Route::view('horizon-fund','swinvest/horizon-fund');
Route::view('horizon-fund','swinvest/horizon-fund');

Route::view('welcome2','swinvest/welcome2');

Route::view('identity-doc','swinvest/identity-doc');
Route::view('identity-doc2','swinvest/identity-doc2');

Route::view('entity-verification','swinvest/entity-verification');

Route::view('finace-advisor','swinvest/finace-advisor');
Route::view('more-about','swinvest/more-about');

