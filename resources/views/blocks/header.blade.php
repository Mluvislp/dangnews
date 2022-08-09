<header id="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-top">
          <div class="d-flex justify-content-between align-items-center">
           
            <ul class="navbar-top-right-menu">
              @if(!auth()->user())
            <li class="nav-item">
                          <a href="{{ url()->route('login')}}" class="nav-link">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ url()->route('register')}}" class="nav-link">Đăng ký</a>
                        </li>
              @endif
             
              @if(auth()->user())
               <li class="nav-item">
                <a href="{{ url()->route('logout')}}" class="nav-link">Đăng xuất</a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ url()->route('logout')}}" class="nav-link">Xác thực email</a>
              </li> --}}
              @endif
              
              @role('Admin')
              <li class="nav-item">
                <a href="{{ url()->route('admin_dashboard')}}" class="nav-link">Quản trị admin</a>
              </li>
              @endrole
              @role('Writer')
              <li class="nav-item">
                <a href="{{ url()->route('admin_dashboard')}}" class="nav-link">Quản trị admin</a>
              </li>
              @endrole
             
            </ul>
          </div>
        </div>
        <div class="navbar-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <a class="navbar-brand" href="/"
                ><img src="assets/images/logo-byd.png" alt=""
              /></a>
            </div>
            <div>
              <button
                class="navbar-toggler"
                type="button"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="navbar-collapse justify-content-center collapse"
                id="navbarSupportedContent"
              >
                <ul
                  class="navbar-nav d-lg-flex justify-content-between align-items-center"
                >
                  <li>
                    <button class="navbar-close">
                      <i class="mdi mdi-close"></i>
                    </button>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url()->route('home')}}">Trang chủ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url()->route('home')}}">Về chúng tôi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url()->route('home')}}">Liên hệ quảng cáo</a>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="social-media">
              <li>
                <a href="#">
                  <i class="mdi mdi-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-youtube"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="mdi mdi-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="flash-news-banner">
    <div class="container">
      <div class="d-lg-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
        <form action="{{URL('news/handlesearch')}}" method="POST">
          @csrf
          <div class="input-group">
            <input type="text" name="valuesearch" class="form-control rounded" placeholder="Nhập ký tự" aria-label="Search"/>
            <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
          </div>
        </form>
         
        </div>
        <div class="d-flex">
          <span class="text-danger">33°C,Ho Chi Minh City</span>
        </div>
      </div>
    </div>
  </div>