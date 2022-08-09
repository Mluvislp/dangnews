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
                                        <th>Tiêu đề</th>
                                        <th>Tóm tắt</th>
                                        <th>Ngôn ngữ</th>
                                        <th>Ngày đăng</th>
                                        <th>Loại tin</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    @foreach ($post as $val)
                                     <tr>
                                        <td>{{$val->tieuDe}}</td>
                                        <td>{{$val->tomTat}}</td>
                                        <td>{{$val->lang}}</td>
                                        <td>{{$val->ngayDang}}</td>
                                        <td>{{$val->tieuDe}}</td>
                                        <td><a href="{{URL('admin/cap-nhat-tin/'.$val->id)}}" class="btn btn-warning btn-circle">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                        <a href="{{URL('admin/xoa-tin/'.$val->id)}}" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a></td>
                                    </tr>   
                                    @endforeach
                                    
                                                                
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">                            
                                @if ($post->lastPage() > 1)
                                <ul class="pagination">
                                    <li class="{{ ($post->currentPage() == 1) ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{ $post->url(1) }}">Previous</a>
                                    </li>
                                    @for ($i = 1; $i <= $post->lastPage(); $i++)
                                        <li class="{{ ($post->currentPage() == $i) ? ' active' : '' }}">
                                            <a class="page-link" href="{{ $post->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="{{ ($post->currentPage() == $post->lastPage()) ? ' disabled' : '' }}">
                                        <a  class="page-link"href="{{ $post->url($post->currentPage()+1) }}" >Next</a>
                                    </li>
                                </ul>
                                @endif
                            </nav>   
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
@endsection
 
           