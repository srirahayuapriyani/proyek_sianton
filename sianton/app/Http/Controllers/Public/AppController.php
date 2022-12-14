<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard_admin()
    {
        return view("admin.home");
    }
    public function dashboard_dokter()
    {
        return view("dokter.home");
    }
}
