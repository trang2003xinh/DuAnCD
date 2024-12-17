
@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',  [ 'name' => 'Kho chứa tài sản', 'key' => ' list'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('locations.create') }}" class="btn btn-success float-right m-2">Thêm mới</a>
            </div>

            @if (session('status'))
                    <h5 class="alert alert-success">{{ session('status') }}</h5>
                @endif

            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>Tên kho</th>
                        <th>Địa chỉ</th>
                        <th>Mô tả</th>
                        <th>Quản lý kho</th>
                        <th>Thao tác</th>
                    </thead>
                    <tbody>
                        @foreach ($locations as $location)
                            <tr>
                                <td>{{$location->id}}</td>
                                <td>{{$location->name}}</td>
                                <td style="max-width: 250px; min-height: 35px">{{$location->address}}</td>
                                <td style="max-width: 420px; min-height: 35px">{{$location->description}}</td>
                                <td>{{$location->email}}</td>
                                <td>
                                    <a href="{{ route('locations.edit', ['id'=>$location->id]) }}"
                                        class="btn btn-primary">Sửa</a>
                                    <a href="{{ route('locations.delete', ['id'=>$location->id]) }}"
                                        class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


