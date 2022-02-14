<header>
    <div class="container">
        <nav>

            <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo">

            <ul>
                <li class="{{ Request::route()->getName() === 'characters' ? 'active' : '' }}">
                    <a href="#">Characters</a>
                </li>
                <li class="{{ Request::route()->getName() === 'homepage' ? 'active' : '' }}">
                    <a href="{{ route('homepage') }}">Comics</a>
                </li>
                <li class="{{ Request::route()->getName() === 'movies' ? 'active' : '' }}">
                    <a href="#">Movies</a>
                </li>
                <li class="{{ Request::route()->getName() === 'tv' ? 'active' : '' }}">
                    <a href="#">Tv</a>
                </li>
                <li class="{{ Request::route()->getName() === 'games' ? 'active' : '' }}">
                    <a href="#">Games</a>
                </li>
                <li class="{{ Request::route()->getName() === 'videos' ? 'active' : '' }}">
                    <a href="#">Videos</a>
                </li>
                <li class="{{ Request::route()->getName() === 'fans' ? 'active' : '' }}">
                    <a href="#">Fans</a>
                </li>
                <li class="{{ Request::route()->getName() === 'news' ? 'active' : '' }}">
                    <a href="#">News</a>
                </li>
                <li class="{{ Request::route()->getName() === 'shop' ? 'active' : '' }}">
                    <a href="#">Shop</a>
                </li>
            </ul>
        </nav>
    </div>
</header>