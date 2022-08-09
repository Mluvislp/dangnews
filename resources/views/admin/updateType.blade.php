@extends('admin.adminlayout')

@section('content')
<div class="container">
    <form action="{{URL('admin/xu-ly-cap-nhat-loai')}}" method="POST">
      @csrf
        <div class="form-group">

          <input type="hidden" value="{{$data->id}}" name="id" id="id">

          <label for="nameType">Sửa tên thể loại</label>
          <input value="{{$data->ten}}" type="text" class="form-control" id="nameType" name="nameType" aria-describedby="emailHelp" placeholder="Nhập...">
          <small id="emailHelp" class="form-text text-muted">Nhập đúng chính tả</small>

          <label for="nameType">Sửa ngôn ngữ</label>
          <input value="{{$data->lang}}" type="text" class="form-control" id="langType" name="langType" aria-describedby="emailHelp" placeholder="Nhập...">
          <small id="emailHelp" class="form-text text-muted">Nhập đúng chính tả</small>
          
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
      </form>
      <hr>
      <a href="{{route('admin_getType')}}" class="btn btn-secondary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">Xem danh sách</span>
    </a>
    </div>


@endsection
 
           
