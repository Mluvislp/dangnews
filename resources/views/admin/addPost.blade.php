@extends('admin.adminlayout')

@section('content')
<div class="container">
    <form action="{{URL('admin/xu-ly-them-tin')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nameType">Tiêu đề</label>
                <input name="tieuDe" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Nhập...">
                <small id="emailHelp" class="form-text text-muted">Nhập đúng chính tả</small>
            <label for="nameType">Tóm tắt</label>
                <input name="tomTat"  type="text" class="form-control" id="nameType" aria-describedby="emailHelp" placeholder="Nhập...">
                <small id="emailHelp" class="form-text text-muted">Nhập đúng chính tả</small>
        <div>
            <textarea name="addpost" id="addpost" cols="30" rows="5"></textarea>
        </div>
        <br>
        <div class="col-12">  
            Chọn thể loại                          
            <select name="idLT" class="form-control">
                @foreach($categories as $value)
                    <option value="{{$value->id}}">{{$value->ten}}</option>
                @endforeach
            </select>       
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
  </form>

  <hr>
  <a href="{{route('admin_getType')}}" class="btn btn-secondary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-arrow-right"></i>
    </span>
    <span class="text">Xem danh sách</span>
</a>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#addpost' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
 
           
