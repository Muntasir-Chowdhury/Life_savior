<div class="header-top row align-items-center">
    <div class="col-lg-3">
        <div class="brand">
            <a href="index.html">
                LifeSavior
            </a>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="topbar">
            <div class="topbar-col">
                <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+012 345 67890</a>
            </div>
            <div class="topbar-col">
                <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>info@example.com</a>
            </div>
            <div class="topbar-col">
                <div class="topbar-social">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url('donar_list')}}" class="nav-item nav-link">Donor List</a>
                    <a href="{{url('post_list')}}" class="nav-item nav-link">News Feed</a>
                    @if (Route::has('login'))
                  @auth
                      <a href="{{ url('/home') }}" class="nav-item nav-link">My Panel</a>
                  @else
                      <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                      @endif
                  @endauth
          @endif
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Queries</a>
                        <div class="dropdown-menu">
                            <a href="{{url('eligible_list')}}" class="dropdown-item">Requirements to donate blood</a>
                            <a href="https://www.who.int/news-room/q-a-detail/blood-products-why-should-i-donate-blood" class="dropdown-item">Why should we donate blood? </a>
                        </div>
                    </div>
                    <a href="{{url('donar_list')}}" class="btn">Find A Donor</a>
                </div>
            </div>
        </div>
    </div>
</div>