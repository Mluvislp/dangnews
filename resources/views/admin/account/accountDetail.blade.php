@extends('admin.adminlayout')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">      
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">John Smith</h5>
              {{-- @php
                  print_r($testrole);
              @endphp --}}
              {{-- <p class="text-muted mb-1">Full Stack Developer</p> --}}
              <p class="text-muted mb-4">Quyền hạn của người dùng : <b>@php
                  if($role !== ''){ 
                    echo($role[0]->name);
                  }else{
                    echo('Người đọc');
                  }
              @endphp</b></pre>
                <form action="{{URL('admin/xu-ly-cap-nhat-role')}}" method="post">'
                  @csrf
                  <div class="input-group mb-3">
                    <input type="hidden" name="id_user" value={{$user->id}}>
                    <div class="input-group-prepend">
                      <button class="btn btn-outline-secondary" type="submit">Thay đổi</button>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03" name="role" aria-label="Example select with button addon">
                        <option selected>Lựa chọn thay đổi</option>
                        @foreach ($allRoles as $role)                 
                        <option value={{$role->name}}>{{$role->name}}</option>
                        @endforeach
                    </select>           
              
                </div>
                </form>
              
            </div>
          </div>          
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Username</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->name}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->email}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Số diện thoại</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Chưa đăng ký</p>
                </div>
              </div>
              <hr>
             
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Địa chỉ</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Chưa đăng ký</p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
@endsection
