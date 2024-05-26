<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $data = array();
        $data ['title'] = "Skill Akademik";
        $skills[] = array("course"=>"Matematika", "type"=>"Diskrit", "rate"=>4);
        $skills[] = array("course"=>"Matematika", "type"=>"Aljabar Linear", "rate"=>3);
        $skills[] = array("course"=>"Basis Data", "type"=>"DDL", "rate"=>2);
        $skills[] = array("course"=>"Bhs Inggris", "type"=>"Speaker", "rate"=>1);
        $data['skills'] = $skills;
        return view('modules.home.home')->with("data", $data);
    }
}
