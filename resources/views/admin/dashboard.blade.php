@extends('admin.layout')
@section('content')
<h4 class="bg-info py-3 mb-3 rounded text-center">
    <i class="fas fa-chart-line"></i> Thống kê
</h4>

<h5>Top 3 sản phẩm bán được nhiều nhất </h5>
<div class="row mb-3 text-dark">

    @foreach ($sanPhamDaBanNhieuNhat as $index => $i)
        <div class="col-md-4">
            <div class="m-1 py-2 px-3 bg-success rounded">
                <h5><i class="fas fa-trophy"></i> Top {{ $index + 1 }}</h5>
                <img height="50px" src="{{ $i->image_product }}">
                <div>{{ $i->name_product }}</div>
                <div>{{ number_format($i->price_product) }}₫</div>
                <div>Đã bán {{ $i->daban }}</div>
            </div>
        </div>
    @endforeach

</div>
<hr>
<div class="row text-dark">
    
    <div class="col-md-3">
        <div class="bg-warning rounded my-2 py-3 h-10 text-center">
            <h5>{{ $dhcxn }}</h5>
            <p><i class="fas fa-clipboard-list"></i> Đơn hàng chưa xác nhận</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="bg-warning rounded my-2 py-3 h-10 text-center ">
            <h5>{{ $dh }}</h5>
            <p><i class="fas fa-clipboard-list"></i> Tổng số đơn hàng</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="bg-warning rounded  my-2 py-3 h-10 text-center ">
            <p><i class="fas fa-coins"></i> Tổng danh thu</p>
            <h5> {{ number_format($tongDanhThu->tongdanhthu) }}₫</h5>

        </div>
    </div>
    <div class="col-md-3">
        <div class="bg-warning rounded my-2 py-3 h-10 text-center">
            <p><i class="fas fa-box"></i> Tổng số lượng sản phẩm bán được</p>
            <h5>{{ $tongSoLuongBan->tongsoluongban }} cái</h5>

        </div>
    </div>
    <div class="col-md-3 ">
        <div class="bg-warning rounded my-2 py-3  text-center">
            <p><i class="fas fa-cubes"></i> Tổng số loại sản phẩm</p>
            <h5>{{ $sp }} cái</h5>

        </div>
    </div>
</div>
@endsection