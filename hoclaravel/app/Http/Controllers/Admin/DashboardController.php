<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //theo cach truyen thong thif thuowng su dung session de check login 
    }

    public function index()
    {
        return '<h2> Hom Hom </h2>';
    }
}
