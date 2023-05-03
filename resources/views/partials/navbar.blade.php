<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid text-white">
        <a class="navbar-brand font-weight-bolder" href="#">BLOK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'About' ? 'active' : '' }}" aria-current="page"
                        href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Blogs' ? 'active' : '' }}" aria-current="page"
                        href="/blogs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title == 'Category' ? 'active' : '' }}" aria-current="page"
                        href="/category">Category</a>
                </li>
            </ul>
        </div>
    </div>
    @if ($title != 'Login')
        @auth
              <ul class="navbar-nav me-2">
                <li class="nav-item dropdown align-self-center mr-3">
                    <a class="nav-link dropdown-toggle text-black-50 mr-3" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu mr-3">
                        <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                          <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                          </form>
                        </li>
                    </ul>
                </li>
            </ul>
        @else
            <a class="btn btn-primary me-2" href="/login">Login</a>
        @endauth
    @endif
</nav>
