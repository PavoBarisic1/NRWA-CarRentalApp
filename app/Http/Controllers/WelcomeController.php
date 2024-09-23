<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome'); // Pretpostavljam da je tvoje welcome view smešteno u resources/views/welcome.blade.php
    }
}
