@extends('admin.layout')
@section('content')
    <h5>Slider</h5>
    @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-hover table-bordered ">
        <tr class="fw-bold bg-info">
            <td>id</td>
            <td>Tên slider</td>
            <td>Hình ảnh</td>
            <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Thêm
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm slider</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('slider-add') }}" method="post">@csrf
                                    <input class="form-control" type="text" placeholder="Tên slider" name="name_slider" maxlength="100" required>
                                    <br>
                                    <input class="form-control" type="text" placeholder="Link ảnh" name="image_slider" maxlength="9998" required>
                                    <br>
                                    <input class="btn btn-success" type="submit" value="Thêm">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @foreach ($slider as $i)
            <tr>
                <td>{{ $i->id_slider }}</td>
                <td>{{ $i->name_slider }}</td>
                <td><img height="50px" src="{{ $i->image_slider }}"></td>
                <td>
                    <a href="{{ url('slider-delete/'.$i->id_slider) }}" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
