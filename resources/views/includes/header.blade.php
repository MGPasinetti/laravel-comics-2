
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
            <img src="images/dc-logo.png" alt="dc-logo">

            <nav>
                <ul>
                    @php
                        $arrNavMenu = config('navmenu');
                    @endphp

                    @foreach ($arrNavMenu as $menuItem)
                        <li class="{{ in_array(Route::currentRouteName(), $menuItem['route']) ? 'active' : '' }}">
                            <a href="{{ route($menuItem['route'][0]) }}">{{ strtoupper($menuItem['name']) }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="searchbar">
                <input type="text" name="search" id="searchbar" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>


</header>
