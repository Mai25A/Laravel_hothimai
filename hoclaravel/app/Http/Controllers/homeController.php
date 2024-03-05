<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public $data = [];
    //Action index()N
public function index(){ 
    $this->data['welcome'] = "Hoc lap trinh laravel";
    $this->data['content'] = '<h3>cHUONG1: Nhap mon laravel</h3>
    <p>kien thuwc 1</P>
    <p>kien thuwc 2</P>
    <p>kien thuwc 3</P>';
    $this->data['index'] = 10;
    $this-> data['check'] = true;
    return view('home', $this->data);
}
//Action getNews()
public function getNews(){
return 'News list';
}
public function getCategories($id) { 
    return 'Chuyên mục: '.$id; 
}
public function products(){
    $this->data['title'] = 'san pham';
    return view('clients.products',$this->data);
}
public function getAdd(){
    $this->data['title'] = 'them san pham';

    return view('clients.blocks.add',$this->data);
}
public function postAdd(Request $request){
    return $request.'hih';
}
public function putAdd(Request $request){
    return $request.'hihe';
}
public function getArray(){
    $content = [
        'name'=>'Mai',
        'description'=>'sinh  vueb cua PNv',
        'session'=>'laravel'
    ];  
    return $content;
}

}

