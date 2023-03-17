<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
    {
    public function index () {
        return view('pages.welcome');
    }



    public function discover () {
        return view('pages.discover');
    }


    public function buy () {
        return view('pages.buy');
    }

    public function Contact () {
        return view('pages.contact');
    }




    }
