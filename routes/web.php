<?php

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
use App\cauhoi;
use App\thisinh;


Route::get('/', function () {
    return view('welcome');
});
# test model
Route::get("model", function(){
    $cauhoi = cauhoi::find(1);
    foreach($cauhoi->cautraloi as $tl){
        echo $tl->noidung. "<br>";
    }
});
Route::get("db", function(){
    echo DB::table("thisinh")->get();
});
#-----trang chu-----
Route::get('trangchu', 'template@trangchu');

# ---   login ----

Route::get('logints', 'template@getlogints')->name('templatets');
Route::post('waitlogints', 'template@postlogints')->name('logints');

Route::get('loginad', 'template@getloginad');
route::post('waitloginad', 'template@postloginad')->name('loginad');

Route::get('loginrd', 'template@getloginrd');
Route::post('waitloginrd', 'template@postloginrd')->name('loginrd');

#------ Route Admin ---------
Route::group(['prefix' => 'admin'], function(){
    Route::get('dsthisinh', 'admin_controller@getdsts');
    Route::get('suadsthisinh/{id}', 'admin_controller@editdsts');
    Route::get('xoadsthisinh/{id}', 'admin_controller@deletedsts');

    Route::get('dsadmin', 'admin_controller@getdsadmin');
    Route::get('suadsadmin/{id}', 'admin_controller@editadmin');
    Route::get('xoadsadmin/{id}', 'admin_controller@deleteadmin');

    Route::get('dsnguoirade', 'admin_controller@getdsrd');
    Route::get('suadsnguoirade/{id}', 'admin_controller@editrd');
    Route::get('xoadsnguoirade/{id}', 'admin_controller@deleterd');
});


#------ Route nguoirade --------

Route::group(['prefix' => 'nguoirade'], function () {

});

#-------- Route thisinh --------

Route::group(['prefix' => 'thisinh'], function () {

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
