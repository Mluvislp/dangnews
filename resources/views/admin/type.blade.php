@extends('admin.adminlayout')

@section('content')
 <!-- Begin Page Content -->
              <div class="container-fluid">
                <p class="mb-4">Bài viết thuộc bản quyền sở hữu của DangNews </p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tất cả</h6>
                    </div>
                    <div class="card-body" style='text-overflow: ellipsis;'>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên thể loại</th>
                                        <th>Ngôn ngữ</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    @foreach ($categories as $val)
                                    <tr>
                                        <td>{{$val->id}}</td>
                                        <td>{{$val->ten}}</td>
                                        <td>{{$val->lang}}</td>
                                        <td>
                                            <a href="{{URL('admin/cap-nhat-loai/'.$val->id)}}" class="btn btn-warning btn-circle">
                                            <i class="fas fa-exclamation-triangle"></i>
                                            </a>
                                            <a href="{{URL('admin/xoa-loai/'.$val->id)}}" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr> 
                                    @endforeach                                                           
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('admin_addType')}}" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Thêm mới</span>
                        </a>
                    </div>
                    
                </div>

            </div>
            <!-- /.container-fluid -->
@endsection
 
           