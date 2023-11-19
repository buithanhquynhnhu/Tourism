<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\CRUD\_Product;
class ProductController extends Controller
{
    public function __construct(_Product $product,){
        $this->product=$product;
    }
    public function getChitiet(Request $request){
        $sanpham= Product::where('id',$request->id)->first();
        return view('chitiet_sanpham',compact('sanpham'));
    }
}
