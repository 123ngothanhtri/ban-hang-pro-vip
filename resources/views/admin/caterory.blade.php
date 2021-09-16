@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <h5>Danh mục</h5>

        <table class="table table-bordered table-hover">
            <thead>
                <tr class="alert-info">
                    <th>#</th>
                    <th>Danh mục</th>
                    <th>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-plus"></i> Thêm
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('caterory-add') }}" method="post">@csrf
                                            <input class="form-control" type="text" placeholder="Tên danh mục" name="name_caterory" required autofocus><br/>
                                            <input class="btn btn-success" type="submit" value="Thêm">
                                          </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($caterory as $i)
                    <tr>
                        <td>{{ $i->id_caterory }}</td>
                        <td>{{ $i->name_caterory }}</td>
                        <td>
                            <a href="{{ url('caterory-delete/'. $i->id_caterory) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Xóa</a>
                            <a href="{{ url('caterory-edit/' . $i->id_caterory) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Cập nhật</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
