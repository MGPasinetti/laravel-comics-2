
<header>
    <div class="dc-sites">
        <div class="container-centered">
            <span>
                DC POWER&trade; VISA&reg;
            </span>

            <span>
                ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i>
            </span>
        </div>
    </div>

    <div class="logo-nav-search">

        <div class="container-centered">
            <img src="images/dc-logo.png" alt="">

            <nav>
                <ul>
                    <li class="{{ (Route::current()->getName() == 'characters') ? 'active' : '' }}"><a href="{{ route('characters') }}">CHARACTERS</a></li>
                    <li class="{{ (Route::current()->getName() == 'comics') ? 'active' : '' }}"><a href="{{ route('comics') }}">COMICS</a></li>
                    <li class="{{ (Route::current()->getName() == 'movies') ? 'active' : '' }}"><a href="{{ route('movies') }}">MOVIES</a></li>
                    <li class="{{ (Route::current()->getName() == 'TV') ? 'active' : '' }}"><a href="{{ route('TV') }}">TV</a></li>
                    <li class="{{ (Route::current()->getName() == 'games') ? 'active' : '' }}"><a href="{{ route('games') }}">GAMES</a></li>
                    <li class="{{ (Route::current()->getName() == 'collectibles') ? 'active' : '' }}"><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
                    <li class="{{ (Route::current()->getName() == 'videos') ? 'active' : '' }}"><a href="{{ route('videos') }}">VIDEOS</a></li>
                    <li class="{{ (Route::current()->getName() == 'fans') ? 'active' : '' }}"><a href="{{ route('fans') }}">FANS</a></li>
                    <li class="{{ (Route::current()->getName() == 'news') ? 'active' : '' }}"><a href="{{ route('news') }}">NEWS</a></li>
                    <li class="{{ (Route::current()->getName() == 'shop') ? 'active' : '' }}"><a href="{{ route('shop') }}">SHOP <i class="fa-solid fa-caret-down" style="color: #0282F9"></i></a></li>
                </ul>
            </nav>

            <div class="searchbar">
                <input type="text" name="search" id="searchbar" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>


</header>
