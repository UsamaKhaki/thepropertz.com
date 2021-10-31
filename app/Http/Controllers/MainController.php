<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function aboutUs(){
        return view('pages.about-us');
    }
    public function contactUs(){
        return view('pages.contact-us');
    }
    public function developers(){
        return view('pages.index');
    }
    public function consultancy(){
        return view('pages.consultancy');
    }
    public function serviceProvision(){
        return view('pages.service-provision');
    }
}
