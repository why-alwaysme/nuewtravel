<!-- Navbar -->
  <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white ">
      <a class="navbar-brand" href=" {{Route('home')}} ">
        <img src="{{url('frontend/images/logo.png')}}" alt="Logo Nuew">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href=" {{Route('home')}} ">Home</a>
          </li>
          <li class="nav-item dropdown mx-md-2">
            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Travel Package
            </a>
            <div class="dropdown-menu">
              @foreach ($items as $item)
                <a href="{{Route('detail', $item->slug)}}" class="dropdown-item">{{$item->title}}</a>
              @endforeach
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Services</a>
          </li>
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link">Testimonial</a>
          </li>

          @auth
            <li class="nav-item dropdown mx-md-2">
              <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="https://ui-avatars.com/api/?name=XR" height="30" class="rounded-circle">
                username
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item d-sm-block d-md-none my-2 my-lg-0 d-none d-md-block">
                  Profil
                </a>
                <form class="d-sm-block d-md-none my-2 my-lg-0 d-none d-md-block" action="" method="">
                  @csrf
                  <button class="dropdown-item btn" type="submit">
                    Cart
                    <span class="badge badge-pill badge-danger">5</span>
                  </button>
                </form>
                <div class="dropdown-divider"></div>

                <!-- Mobile -->
                <form class="d-sm-block d-md-none" action=" {{url('logout')}} " method="POST">
                  @csrf
                  <button class="dropdown-item btn" type="submit">
                  Logout
                  </button>
                </form>
                
                <!-- Desktop -->
                <form class="my-2 my-lg-0 d-none d-md-block" action=" {{url('logout')}} " method="POST">
                  @csrf
                  <button class="dropdown-item btn" type="submit">
                    Logout
                  </button>
                </form>

              </div>
            </li>
          @endauth

        </ul>

        
        @guest
            
        <!--Mobile Button-->
        <form class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login my-2 my-sm-0" type="button"
          onclick="event.preventDefault(); location.href='{{url('login')}}';">
          Masuk
          </button>
        </form>
        
        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
           onclick="event.preventDefault(); location.href='{{url('login')}}';">
           Masuk
          </button>
        </form>
        @endguest
        
      </div>
    </nav>
  </div>