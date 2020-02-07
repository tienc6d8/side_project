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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','Admin@getLogin')->name('login');
Route::post('login','Admin@postLogin')->name('checkLogin');

Route::get('logout','Admin@logout')->name('logout');

Route::get('admin','Admin@getViewAdmin')->middleware('Check');


//model
Route::group(['prefix'=>'model'],function (){
    // lấy toàn bộ dữ liệu trong bảng
    Route::get('all',function (){
        $data = App\Admin::all()->toArray();
        dd($data);
    });

    //Lấy 1 dòng dữ liệu thông qua khóa chính
    Route::get('find',function (){
        $data = App\Admin::find(7)->toArray();
        dd($data);
    });

    // Thêm dữ liệu
    Route::get('insert',function (){
        $data = new App\Admin;
        $data ->name = 'Anh yeu em';
        $data ->password = bcrypt('123456');
        $data ->level = 2;
        $data ->created_at = new DateTime();
        $data->save();
    });

    // Sửa
    Route::get('update',function (){
        $data = App\Admin::find(15);
        $data ->name = 'Update Ok';
        $data ->password = bcrypt('123');
        $data ->level = 2;
        $data ->updated_at = new DateTime();
        $data->save();
    });

    // Xóa
    Route::get('delete',function (){
        //cách 1:
//      App\Admin::find(16)->delete();
        //cách 2:
        App\Admin::destroy(15);
    });


});

// cách truy vấn liên kết bảng

        // liên kết 1-1 khóa chính - khóa phụ
Route::get('lkc-p',function (){
    $data = App\Admin::all();

    foreach ($data as $value){
        echo $value->name;
        echo "<br>";

        if($value->info!=null){
            echo $value->info->address;
            echo "<br>";
            echo $value->info->email;
            echo "<br>";
            echo $value->info->phone_number;
        }
        echo "<hr>";
    }

});
        // liên kết 1-1  khóa phụ - khóa chính
Route::get('lkp-c',function (){
    $data = App\Info::all();

    foreach ($data as $value){
        echo $value->address;
        echo "<br>";

        if($value->admin!=null){
            echo $value->admin->name;
            echo "<br>";
            echo $value->admin->password;

        }
        echo "<hr>";
    }

});
        // liên kết 1 - nhiều
Route::get('lk1-n',function (){
    $data = App\Admin::all();
    foreach ($data as $value){
        echo $value->name;
        echo "<br>";
        echo "<br>";
        foreach ($value->comment as $content){
            echo $content->content."<br>";
        }
        echo "<hr>";
    }
});
    //comment -> admin
Route::get('lk',function (){
    $data = App\Comment::all();
    foreach ($data as $value){
        echo $value->content;
        echo "<br>";
        echo $value->admin_commnent->name.",";
        echo "<hr>";
    }
});

// test
Route::get('lk1nb',function (){
    $data = App\Product_sp::with(['info_sp', 'nguoidung_sp'])->get();
//    dd($data);
    foreach ($data as $value){
        echo $value->name_sp."<br><br>";

        foreach ($value->info_sp as $info){
            echo $info->nha_sx;
            echo "<br>";
            echo $info->price_sp;
            echo "<br>";
        }

        foreach ($value->nguoidung_sp as $ng){
            echo $ng->name_nguoidung;
            echo "<br>";
            echo $ng->email;
            echo "<br>";
            echo $ng->address;
            echo "<br>";
            echo "<br>";

        }

        echo "<hr>";
    }
});
Route::get('dle',function (){
    //cách 1:
      DB::table('product_sp')->delete();
    //cách 2:
//    App\Admin::destroy(15);
});




