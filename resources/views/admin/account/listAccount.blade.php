@extends('admin.adminlayout')

@section('content')
 <!-- Begin Page Content -->
              <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tất cả</h6>
                    </div>
                    <div class="card-body" style='text-overflow: ellipsis;'>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Xác thực vào ngày, giờ</th>
                                        <th>Quyền hạn</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    
                                    @foreach ($users as $val)
                                    <tr>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->email}}</td>
                                        <td>{{$val->email_verified_at}}</td>
                                        <td>admin</td>
                                        <td><a href="{{URL('admin/cap-nhat-tai-khoan/'.$val->id)}}" class="btn btn-warning btn-circle">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                        <a href="{{URL('admin/cap-nhat-loai/'.$val->id)}}" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a></td>
                                    </tr>    
                                    @endforeach
                                                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
@endsection
 
           