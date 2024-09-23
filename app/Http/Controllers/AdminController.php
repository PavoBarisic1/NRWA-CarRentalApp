<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin'); // Pretpostavljam da je tvoje admin view smešteno u resources/views/admin.blade.php
    }
}
