<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{

    public function index(){

    }

    public function detail(){
        return view('pages.properties.detail');
    }

}
