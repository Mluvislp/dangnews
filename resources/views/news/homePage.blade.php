@extends('pagelayout')

@section('content')

<div class="content-wrapper">
    <div class="container">
      
      <div class="row" data-aos="fade-up">
        <div class="col-xl-8 stretch-card grid-margin">
          <div class="position-relative">
            <img
              src="assets/images/dashboard/banner.jpg"
              alt="banner"
              class="img-fluid"
            />
            <div class="banner-content">
              <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                Nóng
              </div>
              <h1 class="mb-0">GLOBAL PANDEMIC</h1>
              <h1 class="mb-2">
               {{$singleNews->tieuDe}}
              </h1>
              <div class="fs-12">
                <span class="mr-2">Photo </span>10 Minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 stretch-card grid-margin">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <h2>Mới cập nhật</h2>          
             
              @foreach ($data2news as $value)
              <div
              class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between"
            >
              <div class="pr-3">
                
                <h5>{{ $value->tieuDe}}</h5>
                <div class="fs-12">
                  <span class="mr-2">Photo </span>{{$value->ngayDang}}
                </div>
              </div>
              <div class="rotate-img">
                <img
                  src="assets/images/dashboard/home_2.jpg"
                  alt="thumb"
                  class="img-fluid img-lg"
                />
              </div>
            </div>

              @endforeach
              
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col-lg-3 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <h2>Chủ đề</h2>
              
              <ul class="vertical-menu">

                @foreach ($categories as $value)
                  <li><a href="{{URL('news/flcategory/'.$value->id)}}">{{$value->ten}}</a></li>
                @endforeach              
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
            @foreach ($data4news as $value)
                <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="position-relative">
                    <div class="rotate-img">
                      <img
                      {{-- $value->urlHinh ? URL::asset('assets/images/news_img/'.$value->urlHinh) :  --}}
                      src={{$value->urlHinh ? URL::asset('assets/images/random_img').'/'.$value->urlHinh.'.jpg' : 'assets/images/logo-byd.png' }}
                        alt="thumb"
                        class="img-fluid"
                      />
                    </div>
                    <div class="badge-positioned">
                      <span class="badge badge-danger font-weight-bold"
                        >Tin nhanh</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-8  grid-margin">
                  <h2 class="mb-2 font-weight-600">
                    <a href="{{url('news/details/'.$value->slug)}}">{{$value->tieuDe}}</a>
                  </h2>
                  <div class="fs-13 mb-2">
                    {{-- <span class="mr-2">Photo  --}}
                    </span>{{$value->ngayDang}}
                  </div>
                  <p class="mb-0">
                   {{$value->tomTat}}
                  </p>
                </div>
              </div>
            @endforeach
            <a href="">Xem thêm</a>

            </div>
          </div>
       
        </div>
      </div>
      
    </div>
  </div>
@endsection
 