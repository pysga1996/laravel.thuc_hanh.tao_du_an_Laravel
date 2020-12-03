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
    use Illuminate\Http\Request;
    use Symfony\Component\Console\Output\ConsoleOutput;

    Route::get('/', function () {
        $out = new ConsoleOutput();
        $out->writeln('test console!');
        return view('welcome');
    });

    Route::get( '/xin-chao' , function(Request $request){
        $ten = $request->query('ten');
        $namsinh = $request->query('namsinh');
        return 'Chào bạn: ' . $ten.'<br>Có năm sinh là: '.$namsinh;
    });

    Route::group(['prefix'=>'group'], function () {
        route::get('1',function () {return "Bạn đang ở nhom/nhom1";});
        route::get('2',function () {return "Bạn đang ở nhom/nhom2";});
        route::get('3',function () {return "Bạn đang ở nhom/nhom3";});
        route::get('4',function () {return "Bạn đang ở nhom/nhom4";});
    });

    Route::prefix('group')->group(function () {
        route::get('5',function () {return "Bạn đang ở nhom/nhom5";});
        route::get('6',function () {return "Bạn đang ở nhom/nhom6";});
        route::get('7',function () {return "Bạn đang ở nhom/nhom7";});
        route::get('8',function () {return "Bạn đang ở nhom/nhom8";});
    });

    Route::get('/hello/{name}/{birth_of_year}', 'MyController@hello');
    Route::get('/goodbye/{name}/{birth_of_year}', 'MyController@goodbye');

