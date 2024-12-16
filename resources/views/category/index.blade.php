
@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',  [ 'name' => 'Loại tài sản', 'key' => ' list'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Thêm mới</a>
            </div>

            @if (session('status'))
                    <h5 class="alert alert-success">{{ session('status') }}</h5>
                @endif

            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>Tên loại</th>
                        <th>Ảnh minh họa</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td><img src="{{asset('uploads/categories/'.$category->img)}}"
                                    width="60px" height="60px" alt="hinh minh hoa"/></td>
                                    <td style="max-width: 350px; min-height: 35px"> {{$category->description}}
                                <td>
                                    <a href="{{ route('categories.edit', ['id'=>$category->id]) }}"
                                        class="btn btn-primary">Sửa</a>
                                    <a href="{{ route('categories.delete', ['id'=>$category->id]) }}"
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


