@extends('pagelayout')

@section('content')
<div class="content-wrapper">
    <div class="container">
      <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <h1 class="font-weight-600 mb-4">
                Có thể bạn đang tìm kiếm
                </h1>
              </div>
            </div>
            <div class="row" style="">
              <div class="col-lg-8">
                @foreach ($data as $value)
                <div class="row">
                  <div class="col-sm-4 grid-margin">
                    <div class="rotate-img">
                        <img
                        src={{$value->urlHinh ? URL::asset('assets/images/random_img').'/'.$value->urlHinh.'.jpg' : 'assets/images/logo-byd.png' }}
                        alt="thumb"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                  <div class="col-sm-8 grid-margin">
                    <h2 class="font-weight-600 mb-2">
                        <a href="{{url('news/details/'.$value->slug)}}">{{$value->tieuDe}}</a>
                    </h2>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </p>
                    <p class="fs-15">
                      Lorem Ipsum has been the industry's standard dummy
                      text ever since the 1500s, when an unknown printer
                      took a galley of type and scrambled it to make a
                      type specimen book.
                    </p>
                  </div>
                </div>

                @endforeach
              

              </div>
              <div class="col-lg-4">
                <h2 class="mb-4 text-primary font-weight-600">
                  Mới nhất
                </h2>
                @foreach ($latestNews as $val)
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="border-bottom pb-4 pt-4">
                        <div class="row">
                          <div class="col-sm-8">
                            <h5 class="font-weight-600 mb-1">
                              <a href="{{url('news/details/'.$value->slug)}}">{{$value->tieuDe}}</a>
                            </h5>
                            <p class="fs-13 text-muted mb-0">
                              <span class="mr-2"></span>Mới cập nhật
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <div class="rotate-img">
                              <img
                              src={{$value->urlHinh ? URL::asset('assets/images/random_img').'/'.$value->urlHinh.'.jpg' : 'assets/images/logo-byd.png' }}
                                alt="banner"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
                @endforeach
                

                <div class="trending">
                  <h2 class="mb-4 text-primary font-weight-600">
                    Xu hướng
                  </h2>
                  @foreach ($trendNews as $val)
                    <div class="mb-4">
                      <div class="rotate-img">
                        <img
                        src={{$value->urlHinh ? URL::asset('assets/images/random_img').'/'.$value->urlHinh.'.jpg' : 'assets/images/logo-byd.png' }}
                          alt="banner"
                          class="img-fluid"
                        />
                      </div>
                      <h3 class="mt-3 font-weight-600">
                        <a href="{{url('news/details/'.$value->slug)}}">{{$value->tieuDe}}</a>
                      </h3>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2"> </span>Xu hướng
                      </p>
                    </div>  
                  @endforeach
                                 
                  
                </div>
              </div>
              
            </div>
            
            
          </div>

        </div>

      </div>
      
    </div>
  </div>

@endsection
 
