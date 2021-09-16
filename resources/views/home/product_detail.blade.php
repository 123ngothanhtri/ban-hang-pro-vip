@extends('home.layout')
@section('content')
<div class="container">
    <div class="row h-100 p-3" >
        <div class="col-md-3">
            <img width="100%" src="{{ $productDetail->image_product }}" alt="">
        </div>
        <div class="col-md-9">
                <div>
                <h1>{{ $productDetail->name_product }}</h1><hr>
                
                <p>Bảo hành 6 tháng</p>
                <p>Tình trạng: còn hàng</p>
                <p> Giá:<span class="text-danger"> {{ number_format($productDetail->price_product) }}₫ </span></p>
               <a class="btn btn-info" href="{{ url('add-to-cart/' . $productDetail->id_product) }}"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
               <p>{!! $productDetail->description_product !!}<p>
             </div>
        </div>
    </div>
</div>

<div class="container">
   <p class="bg-warning px-3 py-2 rounded">Sản phẩm liên quan</p>
    <div class="d-flex flex-wrap">
        @foreach ($productRelated as $s)
        
                <div class="card  p-1 m-1">
                    <img style="width:250px;height:250px;object-fit:cover " src="{{ $s->image_product }}">
                    <div class="card-body">
                        <span>{{ $s->name_product }}</span><br>
                        <b class="text-danger">{{ number_format($s->price_product) }}₫</b>
                            <a href="{{ url('product-detail/'. $s->id_product)}}" class="btn btn-sm d-block btn-dark">Chi tiết</a>
                        <a href="{{ url('add-to-cart/'. $s->id_product) }}" class="btn btn-sm d-block btn-info"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                            
                    </div>
                </div>
            
        @endforeach
    </div>
</div>
@endsection
