<header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
      @foreach($profile as $profile)
        <img src="storage/{{$profile->profile_photo}}" alt="" class="img-fluid rounded-circle">
         <h1 class="text-light"><a href="http://127.0.0.1:8000/">{{$profile->name}}</a></h1>
        @endforeach
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/prashantko1698" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/prashantkkoirala" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/prashant_koiralaa/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/prashant-koirala-002853268/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
         
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
      <ul>
  <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
  <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
  <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
  <!-- <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li> -->
  <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
  <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
  <!-- Add the Login and registration link below -->
  @guest
    <li><a href="{{ route('login') }}"><i class="bx bx-log-in"></i> <span>Login</span></a></li>
@endguest

@auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            <i class="bx bx-log-out"></i> {{ __('Logout') }}
        </a>
    </form>
@endauth



</ul>

      </nav><!-- .nav-menu -->
    </div>

    <!-- session  -->
    <div id="session-success" class="alert alert-success alert-dismissible fade show" style="display: none;" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div id="session-error" class="alert alert-danger alert-dismissible fade show" style="display: none;" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<script>
    // Check if there's a success message
    @if(session('success'))
        // Display the success message
        document.getElementById('session-success').style.display = 'block';

        // Automatically hide the success message after 7 seconds
        setTimeout(function() {
            document.getElementById('session-success').style.display = 'none';
        }, 7000); // 7 seconds (7,000 milliseconds)
    @endif

    // Check if there's an error message
    @if(session('error'))
        // Display the error message
        document.getElementById('session-error').style.display = 'block';

        // Automatically hide the error message after 7 seconds
        setTimeout(function() {
            document.getElementById('session-error').style.display = 'none';
        }, 7000); // 7 seconds (7,000 milliseconds)
    @endif
</script>

<!-- session end -->

  </header>