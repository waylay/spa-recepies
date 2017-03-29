<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item logo" href="{{ url('/') }}">
          <img src="{{ asset('images/logo.png') }}" alt="Recipes">
      </a>
      <a class="nav-item is-tab is-hidden-mobile {{ active('recipes') }}" href="/recipes">Recipes</a>
      <a class="nav-item is-tab is-hidden-mobile">Add new</a>
      <a class="nav-item is-tab is-hidden-mobile">About</a>
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
      <a class="nav-item is-tab is-hidden-tablet" href="/recipes">Recipes</a>
      <a class="nav-item is-tab is-hidden-tablet">Add new</a>
      <a class="nav-item is-tab is-hidden-tablet">About</a>
      <!-- Authentication Links -->
      @if (Auth::guest())
          <a class="nav-item is-tab" href="{{ route('login') }}">Login</a>
          <a class="nav-item is-tab" href="{{ route('register') }}">Register</a>
      @else

          <a href="/dashboard" class="nav-item is-tab">
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>


          <a href="{{ route('logout') }}" class="nav-item is-tab"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>


      @endif
    </div>
  </div>
</nav>
