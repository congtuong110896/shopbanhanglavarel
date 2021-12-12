@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật sản phẩm
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">'.$message.'</span>' ;
                Session::put('message',null);
            }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    {{-- khi thêm hình ảnh phải thêm vào enctype --}}
                    @foreach ($edit_product as $key => $product)
                    <form role="form" action="{{URL::to('/update-product/'.$product->product_id)}}" method="POST" enctype="multipart/form-data"> 
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input name="product_name" type="text" class="form-control" id="exampleInputEmail1"
                               value="{{$product->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input name="product_price" type="text" class="form-control" id="exampleInputEmail1" value="{{$product->product_price}}">
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input name="product_image" type="file" class="form-control" id="exampleInputEmail1"
                            value="">
                            <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" width="100px" height="100px">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize:none" rows="5" class="form-control" id="exampleInputPassword1"
                            name="product_desc">{{$product->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea style="resize:none" rows="5" class="form-control" id="exampleInputPassword1"
                            name="product_content">{{$product->product_content}}</textarea>
                        </div>
                  
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thương hiệu</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key => $cate)
                                @if($cate->category_id == $product->category_id)
                                <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @else
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endif
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục sản phẩm</label>
                            <select name="product_brand" class="form-control input-sm m-bot15">

                                @foreach($brand_product as $key => $brand)
                                @if ($brand->brand_id == $product->brand_id)
                                <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endif
                                <option      value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển thị</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>

                            </select>
                        </div>

                        <button type="submit" name="add_category_product" class="btn btn-info">Cập nhật sản phẩm</button>
                    </form>
                    @endforeach
                </div>

            </div>
        </section>

    </div>
</div>
@endsection