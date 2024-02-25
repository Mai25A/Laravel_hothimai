<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class CategoriesController extends Controller
{
    //
    public function __construct(){
        echo 'welcome ff';
    }
    //hien thi  list chuyen muc - get
    public function index(Request $request){
        // $allData = $request->all();
        // dd($allData);
        // $url =$request->fullUrl();
        // echo $url;
        $ip =$request->ip();
        echo 'ip la'.$ip;
        $method =$request->method();
        echo $method;
        return view('clients/categories/list');  
    }
    //Lays ra mot chuyen muc theo id - get
    public function getCategory($id){
        return view('clients/categories/edit');  
    }
    //Cap nhat mot nchuyen muc-post
    public function updateCategory($id){
        return 'submit category:'.$id;
    }
    //show  form them du lieu -GET
    public function addCategory(Request $request){
        $path = $request->path();
        echo $path;
        return view('clients/categories/add');  
    }
    //them du lieu vao chuyen muc- POst
    public function handleAddCategory(){
        return redirect(route('categories.add'));
        // return 'submit them category:';
    }
    //xoa du lieu - delete
    public function deleteCategory($id){
        return 'submit xoas category:'.$id;
    }
}
