<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    //Action index()
public function index(){ 
    $title = "Hoc lap tronhhh";
    // $dataView = [
    //     'title'=> $title
    // ];

    //compact('title')
    // return view('home')->with('title',$title);    
        return View::make('home',compact('title'));
}
//Action getNews()
public function getNews(){
return 'News list';
}
public function getCategories($id) { 
    return 'Chuyên mục: '.$id; }
}
