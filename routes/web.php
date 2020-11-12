<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/catalog/show/{id}', function($id) 
{
    return view('catalog.show',array('id'=>$id));
});

Route::get('nota/{nota}/{nota2?}', function($nota, $nota2=null)
{
    return 'nota : '.$nota. 'nota2 '.$nota2;
})
->where('nota', '[0-9]+');

Route::get('user/{user}/{nota2?}', function($user, $nota2=null)
{
    return 'user : ' .$user. ' nota1 ' .$nota2;
})
->where(array('user' => '[A-Za-z]+', 'nota2' => '[0-9]+'));

*/

Route::get('/login', function()
{
 return view('auth.login');
});



Route::get('/', '\App\Http\Controllers\HomeController@getHome');
Route::resource('/catalog', '\App\Http\Controllers\CatalogController');
Route::get('/catalog', '\App\Http\Controllers\CatalogController@getIndex');
Route::get('/catalog/show/{id}', '\App\Http\Controllers\CatalogController@getShow');
Route::get('/catalog/create', '\App\Http\Controllers\CatalogController@getCreate');
Route::get('catalog/edit/{id}', '\App\Http\Controllers\CatalogController@getEdit');
Route::post('/catalog/createCatalog', '\App\Http\Controllers\CatalogController@getstore');

Route::post('catalog/devolver/{rented}/{id}', '\App\Http\Controllers\CatalogController@getDelvolver');





















