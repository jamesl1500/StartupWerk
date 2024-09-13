<header class="header-main">
    <div class="header-inner container">
        <div class="header-inner__row row">
            <div class="header-main__logo col-lg-6">
                <a href="{{ route('home') }}">
                    <h2>
                        Startup Werx
                    </h2>
                </a>
            </div>
            <nav class="header-main__nav col-lg-6">
                <ul>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('account') }}">My Account</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">My Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('search') }}">Search</a>
                    </li>
                </ul>
            </nav>
            <!-- <div class="header-main__auth">
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div> -->
        </div>
    </div>
</header>