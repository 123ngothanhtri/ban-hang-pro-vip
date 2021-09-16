@extends('admin.layout')
@section('content')
    <div class="d-flex p-5 alert-info">
        <div>
            <img src="{{ Auth::guard('admin')->user()->avatar }}" alt="" class="rounded-circle" style="height:200px;width:200px;object-fit: cover">

        </div>
        <div class="w-100 p-5" style="position: relative;">

            <h5>Thông tin admin</h5>
            <h5>Tên: {{ Auth::guard('admin')->user()->name }}</h5>
            <h5>Email: {{ Auth::guard('admin')->user()->email }}</h5>
            <img width="150px" src="https://i.ibb.co/DD59wNb/s.png" alt="" style="position: absolute; top:0;right:0">

            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Đổi ảnh
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thay đổi ảnh</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('slider-add') }}" method="post">@csrf
                                <input class="form-control" type="file" placeholder="Tên slider" name="avatar" accept="image/*"  required>
                                <br>
                                <input class="btn btn-success" type="submit" value="Đổi">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
    {{-- <iframe src="https://streamable.com/e/bw5s41?autoplay=1&nocontrols=1" width="560" height="315" frameborder="0" allowfullscreen allow="autoplay"></iframe> --}}
@endsection
