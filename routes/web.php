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

Route::get('admin/login', 'template@getloginad');
route::post('admin/login', 'template@postloginad')->name('loginad');
Route::get('admin/logout', 'template@logoutad');

Route::get('nguoirade/login', 'template@getloginrd');
Route::post('nguoirade/login', 'template@postloginrd')->name('loginrd');
Route::get('nguoirade/logout', 'template@logoutrd');

#------ Route Admin ---------
Route::group(['prefix' => 'admin', 'middleware' => 'admin_login'], function(){

    Route::get('dsthisinh', 'admin_controller@getdsts');
    Route::get('suadsthisinh/{id}', 'admin_controller@geteditdsts');
    Route::post('suadsthisinh/{id}', 'admin_controller@posteditdsts')->name('suadsthisinh');
    Route::get('xoadsthisinh/{id}', 'admin_controller@deletedsts');
    Route::get('themthisinh', 'admin_controller@getaddts');
    Route::post('themthisinh', 'admin_controller@postaddts')->name('themthisinh');

    Route::get('dsadmin', 'admin_controller@getdsad');
    Route::get('suadsadmin/{id}', 'admin_controller@geteditadmin');
    Route::post('suadsadmin/{id}', 'admin_controller@posteditadmin');
    Route::get('xoadsadmin/{id}', 'admin_controller@deleteadmin');
    Route::get('themadmin', 'admin_controller@getaddadmin');
    Route::post('themadmin', 'admin_controller@postaddadmin')->name('themadmin');

    Route::get('dsnguoirade', 'admin_controller@getdsrd');
    Route::get('suadsnguoirade/{id}', 'admin_controller@geteditrd');
    Route::post('suadsnguoirade/{id}', 'admin_controller@posteditrd');
    Route::get('xoadsnguoirade/{id}', 'admin_controller@deleterd');
    Route::get('themnguoirade', 'admin_controller@getaddrd');
    Route::post('themnguoirade', 'admin_controller@postaddrd')->name('themnguoirade');

    #------ de thi -----
    Route::group(['prefix' => 'dethi'], function(){
        Route::get('dsdethi', 'admin_controller@getdethi');
        Route::get('suadethi/{id}', 'admin_controller@geteditdethi');
        Route::post('suadethi/{id}', 'admin_controller@posteditdethi');
        Route::get('xoadethi/{id}', 'admin_controller@deletedethi');
        Route::get('dscauhoi/{id}', 'admin_controller@getcauhoi');
        Route::get('suacauhoi/{id}', 'admin_controller@geteditcauhoi');
        Route::post('suacauhoi/{id}', 'admin_controller@posteditcauhoi');
        Route::get('xoacauhoi/{id}', 'admin_controller@deletecauhoi');
        Route::get('ketquathi/{id}', 'admin_controller@dsketqua');
        Route::get('suadiemthi/{id}', 'admin_controller@geteditdiemthi');
        Route::post('suadiemthi/{id}', 'admin_controller@posteditdiemthi');
        Route::get('xoadiemthi/{id}', 'admin_controller@deletediemthi');
    });
});


#------ Route nguoirade --------

Route::group(['prefix' => 'nguoirade', 'middleware' => 'rd_login'], function () {
    Route::get('danhsachdethi', 'rd_controller@danhsachdethi');
    Route::get('suadethi/{id}', 'rd_controller@getsuadethi');
    Route::post('suadethi/{id}', 'rd_controller@postsuadethi');
    Route::get('xoadethi/{id}', 'rd_controller@xoadethi');
    Route::get('themdethi', 'rd_controller@getthemdethi');
    Route::post('themdethi', 'rd_controller@postthemdethi');
    Route::get('themcauhoi/{id}', 'rd_controller@getthemcauhoi');
    Route::post('themcauhoi/{id}', 'rd_controller@postthemcauhoi');
    Route::get('danhsachcauhoi', 'rd_controller@danhsachcauhoi');
    Route::get('suacauhoi/{id}', 'rd_controller@getsuacauhoi');
    Route::post('suacauhoi/{id}', 'rd_controller@postsuacauhoi');
    Route::get('xoacauhoi/{id}', 'rd_controller@xoacauhoi');

});

#-------- Route thisinh --------

Route::group(['prefix' => 'thisinh'], function () {

});

Route::group(['prefix' => 'ajax'], function(){
    Route::group(['prefix' => 'nguoirade'], function(){
        Route::get('danhsachcauhoi/{id}', 'ajax_controller@danhsachcauhoi');
    });
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
