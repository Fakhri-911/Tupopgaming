<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('content/dashboard');
    }
    public function banners()
    {
        return view('content/banner');
    }
    public function games()
    {
        return view('content/game');
    }
    public function articles()
    {
        return view('content/article');
    }
    public function tournaments()
    {
        return view('content/tournament');
    }
    public function transactions()
    {
        return view('content/transaction');
    }
    public function history()
    {
        return view('content/history');
    }
    
}