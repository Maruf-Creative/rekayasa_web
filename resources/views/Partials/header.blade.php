<header>
        <div class="container">
            <div class="header-content">
                <div class="logo-section">
                    <h1>PT Teknologi Nusantara</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>
                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/news') }}">News</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<!-- <nav>
    <a href="{{ url('/home') }}">Home</a>
    <a href="{{ url('/profile') }}">Profile</a>
    <a href="{{ url('/about') }}">About</a>
    <a href="{{ url('/news') }}">News</a>
    <a href="{{ url('/contact') }}">Contact</a>
</nav> -->