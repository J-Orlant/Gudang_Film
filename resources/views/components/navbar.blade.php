 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark custom-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/image/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex ml-3">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </form>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home text-light"></i> <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-light" href="#drama">Drama</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-light" href="#action">Action</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-light" href="#romance">Romance</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-light" href="#comedy">Comedy</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-light" href="#horror">Horror</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-light" href="#anime">Anime</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe"></i> ID
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">JP</a>
                        <a class="dropdown-item" href="#">ENG</a>
                    </div>
                </li>
            </ul>
            <div class="d-inline ml-auto">
                <button class="btn btn-warning mr-1" id="pop-trigger">
                    + VIP
                </button>
                <a href="{{ route('profil') }}" class="btn btn-secondary">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navbar -->
