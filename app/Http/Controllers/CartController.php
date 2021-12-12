<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; //trả về 1 trang nào đó 
session_start();
class CartController extends Controller
{
    public function save_cart(Request $request) {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $productId = $request->productid_hidden;
        $quantity = $request->qty;
        $data = DB::table('tbl_product')->where('product_id',$productId)->get();
        return view('pages.cart.show_cart')->with('category',$cate_product)->with('brands',$brand_product);
    }
}
