<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        return view('/home');
    }
   
    public function dashboard()
    {
        return view('/dashboard');
    }
    public function login()
    {
        return view('/login');
    }
    public function pilih()
    {
        return view('/praktikum');
    }
    public function supply()
    {
        return view('/supply');
    }
    public function history()
    {
        return view('/history');
    }
    public function historyjual(){
        return view('/historyjual');
    }
    public function cetak(){
        return view('/cetak');
    }
    public function historycetak(){
        return view('/historycetak');
    }
}
