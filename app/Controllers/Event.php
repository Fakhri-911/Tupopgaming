<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function index()
    {
        return view('EventPageViews'); // file: app/Views/event.php
    }
}
