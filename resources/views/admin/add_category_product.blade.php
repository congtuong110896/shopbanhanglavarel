@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sản phẩm
            </header>
          
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-category-product')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input name="category_product_name" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize:none" rows="5" class="form-control" id="exampleInputPassword1"
                                placeholder="Mô tả danh mục" name="category_product_desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển thị</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>

                            </select>
                        </div>

                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm Danh Mục</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection