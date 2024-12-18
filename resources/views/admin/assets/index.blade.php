
@extends('layouts.admin')

@section('title')
  <title>Add Asset</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',  [ 'name' => 'Tài sản', 'key' => ' list'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="" class="btn btn-success float-right m-2">Thêm mới</a>
            </div>

            @if (session('status'))
                    <h5 class="alert alert-success">{{ session('status') }}</h5>
                @endif

            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>Tên tài sản</th>
                        <th>Giá trị </th>
                        <th>Trạng thái</th>
                        <th>Số lượng</th>
                        <th>Người sử dụng</th>
                        <th>Ảnh minh họa</th>
                        <th>Loại</th>
                        <th>Kho</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </thead>
                    <tbody>
                        {{-- @foreach ($categories as $category) --}}
                            <tr>
                                <td scope="row">1</td>
                                <td>Iphone 4</td>
                                <td>2.400.000</td>
                                <td>Sử dụng </td>
                                <td>5</td>
                                <td>tranthib@gmail.com</td>
                                <td><img src="" alt=""></td>
                                <td>Điện thoại</td>
                                <td>Kho Hà Nội</td>
                                <td style="max-width: 150px; min-height: 35px">Điện thoại Iphone 4 được công ty mua, phục vụ công việc trên công ty</td>
                                <td>
                                    <a href=""
                                        class="btn btn-primary">Sửa</a>
                                    <a href=""
                                        class="btn btn-danger">Xóa</a>

                                </td>
                            </tr>
                        {{-- @endforeach --}}
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


