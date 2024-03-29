<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('screens.admin.dashboard.index');
    }

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }
}
