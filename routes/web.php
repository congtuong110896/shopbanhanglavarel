<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


//home 
Route::get('/danh-muc-san-pham/{category_id}',[CategoryProduct::class, 'show_category_home']);
Route::get('/thuong-hieu-san-pham/{brand_id}',[BrandProduct::class, 'show_brand_home']);
Route::get('/chi-tiet-san-pham/{product_id}',[ProductController::class, 'details_product']);

// frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

//backend
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
//login
Route::post('/admin_dashboard', [AdminController::class, 'dashboard']);
//logout
Route::get('/logout', [AdminController::class, 'logout']);

// category product 
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
//ẩn hiện danh mục category
Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);
//edit category
Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);
//update category
Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);


//brand product
Route::get('/add-brand-product', [BrandProduct::class, 'add_brand_product']);
Route::get('/all-brand-product', [BrandProduct::class, 'all_brand_product']);
Route::post('/save-brand-product', [BrandProduct::class, 'save_brand_product']);
//ẩn hiện danh mục brand
Route::get('/unactive-brand-product/{brand_product_id}', [BrandProduct::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [BrandProduct::class, 'active_brand_product']);
//edit brand
Route::get('/edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}', [BrandProduct::class, 'delete_brand_product']);
//update brand
Route::post('/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);

// product
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);
//ẩn hiện danh mục product
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
//edit product
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
//update product
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);

//cart 
Route::post('/save-cart',[CartController::class, 'save_cart']);