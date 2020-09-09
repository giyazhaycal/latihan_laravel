<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Ini adalah Controller Dashboard

	// function index
    public function index()
    {
    	// dari sini, kita arahkan user menuju sebuah file bernama dashboard.blade.php
    	// dengan cara return view()
    	// kenapa disini ga ditulis dashboard.blade.php? karena function view() ini udh paham, bahwa apapun yg kita tulis, dia akan tambahin .blade.php, dan kita justri dilarang tulis dashboard.blade.php
    	
    	// true
    	return view('dashboard');
    	// false
    	// return view('dashboard.blade.php');
    }

    // kategori numpang di Controller Dashboard, karena buat preview
    public function kategori()
    {
        return view('kategori');
    }
}
