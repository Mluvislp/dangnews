
        @extends('admin.adminlayout')

        @section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">                           

                    
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Lượng bài theo danh mục chiếm trong tổng số : {{$total}} bài viết</h6>
                                </div>
                                <div class="card-body">
                                    @foreach ($typeCount as $item)                                   
                                    <h4 class="small font-weight-bold">{{$item['name']}} : {{$item['value']}} bài <span
                                        class="float-right">{{($item['value']/$total*100)}} %</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{($item['value']/$total*100)}}%"
                                                aria-valuenow="{{($item['value']/$total*100)}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>

                        </div>

                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        @endsection
         
        
        
        