<div id="mainNavigation">
  <nav class="navbar-expand-lg">
    <div class="py-3 text-center">
      <a href="{{route('welcome')}}"><img src="/media/logo.png" height="140" alt="LOGO" class="invert"></a>
    </div>
  </nav>
  <div class="navbar-expand-md">
    <div class="navbar-dark text-center my-2">
      <button class="navbar-toggler w-75" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
      </button>
    </div>
    <div class="text-center mt-3 collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Giochi Più Venduti</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie Giochi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Console</a></li>
            <li><a class="dropdown-item" href="#">Pc</a></li>
            <li><a class="dropdown-item" href="#">Mobile</a></li>
          </ul>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="{{route('games.create')}}">Crea Gioco</a>
        </li>
       
        @guest
        <li class="nav-item">
          <a class="nav-link" href="/register">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
       
        
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profilo</a></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
            
            <form action="{{route('logout')}}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</div>