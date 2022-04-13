<nav class="navbar navbar-expand-lg navbar-light bg-light mx-5 px-5">
    <div class="container-fluid">

        <a href="{{route('home')}}" class="navbar-brand text-uppercase">Fictiernia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{__('Főoldal')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="route('genre')">{{__('Zsánerek')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="route('myBooks')">{{__('Könyveim')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="route('browse')">{{__('Böngészés')}}</a>
              </li>
              <li class="nav-item dropdown">
                <button class="btn btn-link text-decoration-none text-reset dropdown-toggle" type="button" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                  Olvasólistáim
                </button>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li class="dropdown-item dropend">
                    <button type="button" class="btn btn-link text-decoration-none text-reset dropdown-toggle" id="navbarReadingListButton" data-bs-toggle="dropdown" aria-expanded="false">
                      Another action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarReadingListButton">
                      <li><a class="dropdown-item" href="#">a</a></li>
                      <li><a class="dropdown-item" href="#">a</a></li>
                      <li><a class="dropdown-item" href="#">a</a></li>
                    </ul>
                  </li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Új lista hozzáadása</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <a href="{{route('reg')}}" class="btn btn-primary">{{__('Regisztráció')}}</a>
              <a href="" class="btn btn-primary"></a>
            </form>
          </div>
    </div>
</nav>