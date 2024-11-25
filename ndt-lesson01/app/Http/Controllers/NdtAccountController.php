<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NdtAccountController extends Controller
{
    //
    public function index(){
        return"<h1>Welcome Nguyễn Đức Thành - Controler </h1>";
    }

    //create form
    public function create(){
        return view('ndt-account-create');
    }
}
