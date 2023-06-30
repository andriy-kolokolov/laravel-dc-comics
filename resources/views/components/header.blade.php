<header>
    <div class="top-line bg-primary text-white">
        <div class="container d-flex align-items-center p-1">
            <div class="ms-auto">
                <span class="me-3"><a href="">DC POWER℠ VISA®</a></span>
                <span><a href="">ADDITIONAL DC SITES &#9660;</a></span>
            </div>
        </div>
    </div>

    <div class="nav-wrapper">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img src="{{ Vite::asset('/resources/img/dc-logo.png') }}" alt="nav-logo">
                </a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        @foreach(config('nav_links') as $route => $name)
                            <li class="nav-item {{ Request::is($route) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url($route) }}">{{ $name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <form class="form-inline d-flex flex-nowrap">
                    <input class="form-control mr-sm-2 me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </div>

    <div class="jumbo-wrapper">
        <img src="{{ Vite::asset('/resources/img/jumbotron.jpg') }}" alt=""/>
    </div>

</header>
