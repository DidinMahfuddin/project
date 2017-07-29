<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ortu;

class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Didin Mahfuddin";
    	return $a;
    }

    public function tampilmodel()
    {
    	$ortu = ortu::all();
    	return $ortu;
    }

    public function tampilview()
    {
    	return view('about');
    }

    public function percobaan()
    {
    	$ortu = ortu::all();
    	return view('index', compact('ortu'));
    }
}