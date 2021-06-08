<div class="cont-nav">
    <div class="navTop">
        <div>
            DC POWER<span>sm</span>Visa&#174;
        </div>

        <div class="navTop-item dropdown">
            <a class="navTop-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ADDITIONAL DC SITES
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{route('comics.index')}}"><img class="logoNav" src={{asset('img\dc-logo.png')}} alt="" class="imgBrand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">CHARACTERS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('comics.index')}}">COMICS
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">MOVIES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">TV</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">GAMES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">COLLECTIBLES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">VIDEOS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">FANS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">NEWS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SHOP
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>
</div>
