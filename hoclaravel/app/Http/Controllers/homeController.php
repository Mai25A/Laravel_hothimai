<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public $data = [];
    protected $product; // Remove the instantiation here

    public function __construct()
    {
        $this->product = new Product(); // Move the instantiation to the constructor
    }
    //Action index()N
    public function index(Request $request){ 
        $products = Product::all()->where('new','=',1);
        $allProducts = Product::all();
        $infor = $request->input('search');
        

        if (isset($infor)) {
            return $this->search($infor);
        }    
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
    public function search($infor)
    {
        $query = $this->product->query();
        $keywords = explode(' ', $infor);

        foreach ($keywords as $keyword) {
            if (is_numeric($keyword)) {
                $query->orWhereRaw("CAST(price AS UNSIGNED) = ?", [explode('.', $keyword)[0]]);
            } else {
                $query->orWhere('name', 'like', '%' . $keyword . '%')
                    ->orWhere('weight', 'like', '%' . $keyword . '%')
                    ->orWhere('rating', 'like', '%' . $keyword . '%')
                    ->orWhere('size', 'like', '%' . $keyword . '%')
                    ->orWhere('reviews', 'like', '%' . $keyword . '%');
            }
        }
        $data = $query->get();

        // Kiểm tra xem có dữ liệu được trả về hay không
        if ($data->isEmpty()) {
            // Nếu không có dữ liệu, trả về view Home với thông báo "Can not found that product"
            return view('Home', compact('data'))->with('message', 'Can not found that product');
        }


        // Nếu có dữ liệu, trả về view Home với dữ liệu đã tìm được
        return view('Home', compact('data'));
    }   
}
