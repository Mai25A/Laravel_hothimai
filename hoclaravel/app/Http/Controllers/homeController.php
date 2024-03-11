<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
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
    $rules = [
            'product_name' => 'required|min:6',
            'price' => 'required|integer'
    ];
        $messages = [
                'product_name.required' => 'Please enter Name',
                'product_name.min' => 'Please enter more than 6 chracter',
                'price.required' => 'Please enter Price',
                'price.integer' => 'Please enter number'
                
        ];
    // $request->validate([
    //     'product_name' => 'required|min:6',
    //     'price' => 'required|integer'
    // ],[
    //     'product_name.required' => 'Please enter Name',
    //     'product_name.min' => 'Please enter more than 6 chracter',
    //     'price.required' => 'Please enter Price',
    //     'price.integer' => 'Please enter number'
        
    // ]);
    $Validator = Validator::make($request->all(),$rules,$messages);
    // $Validator->validate();
    if($Validator->fails()){
        // return 'validate that bai';
        $Validator->errors()->add('msg','Vui long nhap du htong tin ');
    }else{
        // return 'validate thanh cong';
        return redirect()->route('product')->with('msg','Validate thanh cong');
    }
    // $Validator->validate();
    return back()->withErrors($Validator);


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
public function downLoad(Request $request){
    if(!empty($request->image)){
        $image = trim($request->image);
        $fileName = 'image_'.uniqid().'.jpg'; 
        // $fileName = basename($image);

        // return response()->streamDownload(function()use ($image){
        //     $imageContent = file_get_contents($image);
        //     echo $imageContent;
        // },$filename);
        return response()->download($image, $fileName);
        }
}

}

