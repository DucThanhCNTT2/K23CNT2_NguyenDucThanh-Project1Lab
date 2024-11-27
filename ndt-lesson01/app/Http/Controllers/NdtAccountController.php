<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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

//action: return view and data
    public function showData()
    {
        //Trả về view vó tên ndt-account-show trong thư mục \\resources\views\ndt-account-show.blade.php
        $data = array('2310900098','NdtAccount');
        return view('ndt-account-show',compact('data'));
    }

// account list
public function list(){
    //dữ liệu
    $data = array(
        ["id"=>1,"Username"=>"DucThanh","Password"=>"123456@","FullName"=>"Nguyễn Đức Thành"],
        ["id"=>2,"Username"=>"Dinhhieu","Password"=>"223456@","FullName"=>"Đinh Văn Hiếu"]
    );
    //trả về view
    return view('ndt-account-list',compact('data'));
}

//Action connect db get to view
public function ndtgetacount(){
    $data = DB::table('ndt_lesson01_db')->get();
    return view('ndt-account-getall',compact('data'));
}

}