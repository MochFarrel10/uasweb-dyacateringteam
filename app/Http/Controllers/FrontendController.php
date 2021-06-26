<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use App\Models\menu;

class FrontendController extends Controller
{
    public function index(){
        $profile=company::all();
        $menu=menu::all();
        return view('index', ['profile'=>$profile], ['menu' => $menu]);
    }
}
