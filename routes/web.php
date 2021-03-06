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
$glob_file = __DIR__.DIRECTORY_SEPARATOR.'web'.DIRECTORY_SEPARATOR.'*';
foreach(glob($glob_file) as $file)
{
	include $file;
}

Route::any('/rest', 'RestController@intercept')->name('rest');
Route::get('/phpinfo',function(){phpinfo();})->name('phpinfo');