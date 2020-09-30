<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth:front'
        ]);
    }

    public function getInfo()
    {
        return Auth::user();
    }
}
