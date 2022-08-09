@extends('pagelayout')

@section('content')
<div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="card" data-aos="fade-up">
            <div class="card-body">
              <div class="aboutus-wrapper">
                <h1 class="mt-5 text-center mb-5">
                  Đăng nhập DangNews
                </h1>
                <div class="row">
                  <div class="col-lg-12 mb-5 mb-sm-2">
                    <form>
                     
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              aria-describedby="name"
                              placeholder="username hoặc email"
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input
                              type="password"
                              class="form-control"
                              id="email"
                              aria-describedby="email"
                              placeholder="Mật khẩu *"
                            />
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <a
                              href="#"
                              class="btn btn-lg btn-dark font-weight-bold mt-3"
                              >Đăng nhập</a
                            >
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
 
