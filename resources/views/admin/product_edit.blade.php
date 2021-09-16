@extends('admin.layout')
@section('content')
    <h5>Cập nhật sản phẩm</h5>
    <form action="{{ url('product-update') }}" method="post" enctype="multipart/form-data">@csrf
        <input type="hidden" name="id_product" value="{{ $product->id_product }}">

        Tên sản phẩm
        <input value="{{ $product->name_product }}" class="form-control" type="text" name="name_product" maxlength="100" required>

        
        Đơn giá
        <input value="{{ $product->price_product }}" class="form-control" type="number" name="price_product" min="0" maxlength="100" required>

        Link hình ảnh
        <div>
            <input value="{{ $product->image_product }}" onchange="showImg()" type="text" name="image_product" id="link_image" maxlength="900" required class="form-control">
            <img src="{{ $product->image_product }}" id="output_image" style="width: 200px" />
        </div>

        Mô tả
        <textarea name="description_product" id="editor">{{ $product->description_product }}</textarea>
        
        <input class="btn btn-info " type="submit" value="Lưu lại">
        <a href="{{ url('product') }}" class="btn btn-outline-secondary">Hủy</a>
    </form>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor');

        function showImg() {
            var x = document.getElementById('link_image').value;
            document.getElementById("output_image").src = x;
        }
    </script>

@endsection
