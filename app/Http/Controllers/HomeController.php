<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CatalogController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function getHome(){
        return redirect()->action('App\Http\Controllers\CatalogController@getIndex'); 

    }

}
