@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật danh mục sản phẩm
            </header>
          
            <div class="panel-body">
                @foreach ($edit_brand_product as $key => $edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" >Tên danh mục</label>
                            <input name="brand_product_name" required type="text" class="form-control" id="exampleInputEmail1"
                                value="{{$edit_value->brand_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" >Mô tả danh mục</label>
                            <textarea style="resize:none" required rows="5" class="form-control" id="exampleInputPassword1"
                            name="brand_product_desc">{{$edit_value->brand_desc}}</textarea>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>
</div>
@endsection