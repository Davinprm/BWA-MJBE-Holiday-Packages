<link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">

<section class="wrapper" id="navbar">
    <a href="{{ route('home') }}">
        <span class="text-title-3">Indoneyacht</span>
    </a>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('yacht') }}">Yacht</a></li>
            <li><a href="{{ route('destination') }}">Destination</a></li>
            <li><a href="{{ route('experience') }}">Experience</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="admin/login">Login</a></li>
            <li><a href="{{ route('book') }}">Book</a></li>
        </ul>
    </nav>
</section>