<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; //trả về 1 trang nào đó 
session_start();
class HomeController extends Controller
{
    public function index() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(4)->get();

        return view('pages.home')->with('category',$cate_product)->with('brands',$brand_product)->with('all_product',$all_product);
    }
}
