<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('admin');
    }
    function admin()
    {
        return view('indexx');
    }
    function dokter()
    {
        return view('admin');
    }
    function pasien()
    {
        return view('chat');
    }
}
