<?php 
Route::get('/','Admin\DashboardController@index')->name('dashboard');
Route::get('post/list','Admin\PostController@index')->name('post.index');
Route::get('post/manager','Admin\PostController@manager')->name('post.manager');
Route::get('post/add','Admin\PostController@add')->name('post.add');
Route::post('post/save','Admin\PostController@save')->name('post.save');
Route::get('post/update/{id}','Admin\PostController@edit')->name('post.edit');
Route::get('post/remove/{id}','Admin\PostController@remove')->name('post.remove');
Route::get('post/browser/{id}','Admin\PostController@browser')->name('post.browser');
Route::get('provider','Admin\PostController@province');
Route::get('district','Admin\PostController@district');
Route::get('logout','Admin\PostController@logout');
//Route quan li nhan vien
Route::get('user/list','Admin\UserController@index')->name('user.index');
Route::get('user/add','Admin\UserController@add')->name('user.add');
Route::post('user/save','Admin\UserController@save')->name('user.save');
Route::get('user/update/{id}','Admin\UserController@edit')->name('user.edit');
Route::get('user/remove/{id}' , 'Admin\UserController@remove')->name('user.remove');
Route::get('user/manager' , 'Admin\UserController@manager')->name('user.manager');
Route::get('user/browser/{id}' , 'Admin\UserController@browser')->name('user.browser');
//Route quan li CategoryController
Route::get('category/list','Admin\CategoryController@index')->name('category.index');
Route::get('category/add','Admin\CategoryController@add')->name('category.add');
Route::get('category/edit/{id}','Admin\CategoryController@edit')->name('category.edit');
Route::get('category/remove/{id}','Admin\CategoryController@remove')->name('category.remove');
Route::post('category/save','Admin\CategoryController@save')->name('category.save');

//Route quản lí slider
Route::get('slider/list','Admin\SliderController@index')->name('slider.index');
Route::get('slider/add','Admin\SliderController@add')->name('slider.add');
Route::post('slider/save','Admin\SliderController@save')->name('slider.save');
Route::get('slider/remove/{id}','Admin\SliderController@remove')->name('slider.remove');
//Route quản lí quảng cáo
Route::get('adv/list','Admin\AdvController@index')->name('adv.index');
Route::get('adv/add','Admin\AdvController@add')->name('adv.add');
Route::post('adv/save','Admin\AdvController@save')->name('adv.save');
Route::get('adv/edit/{id}','Admin\AdvController@edit')->name('adv.edit');
Route::get('adv/remove/{id}','Admin\AdvController@remove')->name('adv.remove');



 ?>