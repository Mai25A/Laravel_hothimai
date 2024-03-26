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
    public function create()
    {
        //
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
