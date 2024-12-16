
@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Loại tài sản' , 'key' => ' thêm mới'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                @if (session('status'))
                    <h5 class="alert alert-success">{{ session('status') }}</h5>
                @endif

                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Tên loại tài sản</label>
                        <input type="text" class="form-control" id="" name="name" placeholder="Nhập tên loại sản phẩm" required>
                    </div>
                    <div class="mb-3">
                        <label for="description">Mô tả loại tài sản</label>
                        <textarea class="form-control" id="" name="description" placeholder="Nhập mô tả loại sản phẩm" style="min-height: 150px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description">Ảnh minh họa</label>
                        <input type="file" class="form-control" id="" name="img" placeholder="Ảnh minh họa loại sản phẩm" ></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


