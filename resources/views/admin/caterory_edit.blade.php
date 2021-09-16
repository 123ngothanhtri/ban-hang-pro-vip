@extends('admin.layout')
@section('content')
        <h5>Cập nhật danh mục</h5>
        <form action="{{ url('caterory-update') }}" method="post" > @csrf
            <input type="hidden" value="{{ $caterory->id_caterory }}" name="id_caterory">
            Tên danh mục
            <input value="{{ $caterory->name_caterory }}" type="text" name="name_caterory" maxlength="100" required class="form-control" >
            <input value="Lưu lại" type="submit" class="btn btn-success mt-2">
            <a href="{{ url('caterory') }} " class="btn btn-outline-secondary mt-2">Hủy</a>
        </form>
@endsection
