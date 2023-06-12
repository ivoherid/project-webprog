<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar fixed-bottom navbar-content">
    <a class="icon" href="{{ url('home') }}">
        <img src="{{ asset('img/Home_fill.png') }}" alt="home-icon">
        <h6 class="icon-name">Home</h6>
    </a>
    <a class="icon" href="{{ url('barbershopmenu') }}">
        <img src="{{ asset('img/Pipe_fill.png') }}" alt="barbers-icon">
        <h6 class="icon-name">Barbers</h6>
    </a>
    <a class="icon" href="{{ url('profile') }}">
        <img src="{{ asset('img/User_fill.png') }}" alt="user-icon">
        <h6 class="icon-name">Account</h6>
    </a>
</nav>
