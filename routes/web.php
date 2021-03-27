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


/*Route::get('/', function () {
    return view('welcome');
});*/





//例如访问/home地址则路由可以这么写
//Route::请求方式（'请求的url'，匿名函数或控制响应方法）
/*	Route::any('/test',function(){
	echo "当前访问的地址是/test1";
	});*/
/*Route::match(['get','post'],'/',function(){
	//
});
Route::any('foo',function(){
	//
});*/
/*Route::get('/home',function(){
	echo "当前访问的地址是/home";
	});
Route::match(['post','get'],'/test1',function(){
	echo "当前访问的地址是/test1";
	});*/


/*

Route::any('/aaa/{id}',function($id){
	echo "当前访问的地址是/aaa,".$id;
	});
*/


// Route::any('/aaa',function(){
// 	echo "当前访问的地址是/aaa,id是".$_GET['id'];
// 	})->name('test');



// //路由群组
Route::group(['prefix'=>'admin'],function(){
	Route::get('test',function(){
		//匹配“/admin/test” url
	});
	Route::get('test1',function(){
		//匹配“/admin/test” url
	});
	Route::get('test2',function(){
		//匹配“/admin/test” url
	});
});


//控制器路由写法,一定要注意大小写
Route::any('/home/test/test1','TestController@test1');


Route::any('/home/index/index','Home\IndexController@index');
Route::any('/Admin/index/index','Admin\IndexController@index');

Route::group(['prefix'=>'home/test'],function(){
Route::get('add','TestController@add');
Route::get('del','TestController@del');
Route::get('update','TestController@update');
Route::get('increment','TestController@increment');
Route::get('decrement','TestController@decrement');
Route::get('select','TestController@select');
Route::any('test3','TestController@test3');
Route::get('test4','TestController@test4');
Route::any('test5','TestController@test5');
Route::get('test6','TestController@test6');
Route::post('test7','TestController@test7')->name('test7');
});

//模型的增删改查
Route::any('/home/test/test8','TestController@test8');
Route::get('/home/test/test9','TestController@test9');
Route::get('/home/test/test10','TestController@test10');
Route::get('/home/test/test11','TestController@test11');
Route::get('/home/test/test12','TestController@test12');

//自动验证（二合一方法，自己提交给自己）
Route::any('/home/test/test13','TestController@test13');

//文件上传
Route::any('/home/test/test14','TestController@test14');

Route::any('/home/test/test15','TestController@test15');	

//响应方式
Route::get('/home/test/test16','TestController@test16');
Route::get('/home/test/test17','TestController@test17');	










