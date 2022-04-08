<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #424747;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Calendar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            @if(Route::currentRouteName() == 'home')
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
            </ul>
            @endif

                <ul class="navbar-nav mt-auto">
                    @guest
                        @if(Route::currentRouteName() == 'home')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif
                    @endguest
             
                 
                @auth
                
                    @if (auth()->user()->hasRole('admin'))
                        <li class="nav-item">
                            
                            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                                Admin
                            </a>

                        </li>
                    @endif

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</a>
                        </li>

                    </form>
                @endauth

            </ul>
        </div>

    </div>
</nav>
