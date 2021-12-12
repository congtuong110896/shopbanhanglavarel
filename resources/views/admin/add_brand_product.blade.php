@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm thương hiệu sản phẩm
            </header>
          
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-brand-product')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input name="brand_product_name" required type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                            <textarea style="resize:none" required rows="5" class="form-control" id="exampleInputPassword1"
                                placeholder="Mô tả danh mục" name="brand_product_desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển thị</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>

                            </select>
                        </div>

                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm Danh Mục</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection