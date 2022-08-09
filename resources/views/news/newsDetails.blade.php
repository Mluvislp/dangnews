@extends('pagelayout')

@section('content')

  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="card" data-aos="fade-up">
            <div class="card-body">
              <div class="aboutus-wrapper">
                <div class="section-tittle mb-30 pt-30">
                  <h1 class="mt-5">
                    {{$data->tieuDe}}
                  </h1>
                  <h5 class="blog-post-title mb-1">Ngày đăng bài : {{$data->ngayDang}}</h5>
                  <p class="blog-post-meta">Lượt xem :  {{$data->xem}}</p>
                </div>             
                <p> {{$data->tomTat}}</p>
                <p class="about-pera1 mb-25">
                  {{print($data->noiDung)}}</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
 
