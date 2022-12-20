<header>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                  <a class="navbar-brand" href="#">Movies By NazOne</a>
                  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="mainMenu">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                              <li class="nav-item">
                                    <a class="nav-link {{Route::currentRouteName() === 'home' ? 'activeNav' : ''}}" href="{{route('home')}}" aria-current="page">Home</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link {{Route::currentRouteName() === 'trains' ? 'activeNav' : ''}}" href="{{route('trains')}}">Trains</a>
                              </li>

                        </ul>

                  </div>
            </div>
      </nav>

</header>