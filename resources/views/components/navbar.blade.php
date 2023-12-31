  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ route('homepage') }}" class="logo d-flex align-items-center  me-auto me-lg-0">
    <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-laptop"></i>
        <h1>EmanuelePapale</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('homepage') }}"  @if (Route::currentRouteName() == 'homepage') class='active home' link-secondary disabled @endif>Home</a></li>
          <li><a href="{{ route('about') }}" @if (Route::currentRouteName() == 'about') class='active about' link-secondary disabled @endif>About</a></li>
          <li><a href="{{ route('projects') }}" @if (Route::currentRouteName() == 'projects') class='active projects' link-secondary disabled @endif>Projects</a></li>
          <li><a href="{{ route('services') }}" @if (Route::currentRouteName() == 'services') class='active services'link-secondary disabled @endif>Services</a></li>
          <li><a href="{{ route('contact') }}" @if (Route::currentRouteName() == 'contact') class='active contact'link-secondary disabled @endif>Contact</a></li>
        </ul>
      </nav><!-- .navbar -->


      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
