<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public $data = [];
    //Action index()N
    public function index(){ 
        $products = Product::all()->where('new','=',1);
        $allProducts = Product::all();
            
        // dd($products);
        return view('home',compact('products','allProducts'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    
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
    public function downLoad(Request $request){
        if(!empty($request->image)){
            $image = trim($request->image);
            $fileName = 'image_'.uniqid().'.jpg'; 
        }
    }
            // $fileName = basename($image);
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
    
            // return response()->streamDownload(function()use ($image){
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // },$filename);
            // return response()->download($image, $fileName);
            }
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            //
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            //
        }
}
