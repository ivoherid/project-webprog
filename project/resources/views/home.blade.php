<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&family=Montserrat:wght@500&family=Poppins:wght@500&display=swap"
        rel="stylesheet"> </head>

<body>
    {{-- welcome --}}
    <div class="welcome">
        <h1 class="welcome-text">Welcome to BarberQ</h1>
        <p class="hello-text">Hello!, {{ auth()->user()->name }}</p>
    </div>

    {{-- add payment --}}
    <a href="">
        <button class="btn-payment">Add Payment Button</button>
    </a>

    <div class="wallet-container">
        <h2 class="wallet-title">DompetQ</h2>
        <div class="card mb-4 wallet-content">
            <img class="payment-image" src="{{ asset('img/Logo_ovo.png') }}" alt="icon">
            <p class="balance">Rp. {{ auth()->user()->balance }} ,00</p>
        </div>
    </div>

    <div class="barber-near">
        <h2 class="barber-title">Barbers Near Me</h2>

        <div class="barber-profile">
            @foreach ($barber as $data)
                <div class="card barbercontent">
                    <div class="barber-image">
                        <figure class="image is-square">
                            <img class="barber-image" src="{{ asset('img/tony.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="barber-description">
                        <h6 class="barber-text">{{ $data->name }}</h6>
                        <p class="barber-text">{{ $data->barbershop }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- top service --}}
    <div class="top-service">
        <h2 class="service-title">Top Services</h2>
        <div class="top-service-container">
            <div class="top-service-content">
                <img src="{{ asset('img/Matic_Token.png') }}" alt="ic_service">
                <h3 class="top-service-text">Haircut + Wash</h3>
            </div>
            <a class="watch-video" href="#">Watch Video</a>
        </div>
    </div>

    <div class="promo-div">
        <h2 class="promo-title">PromoQ</h2>
        @foreach ($promos as $data)
            <img src="{{ asset('img/promo.png') }}" class="promo-image" alt="...">
        @endforeach
    </div>

    <div class="referral-div">
        <h2 class="referral-title">ReferralQ</h2>
        <img class="promo-image" src="{{ asset('img/rewards.png') }}" alt="">
    </div>

    {{-- articles --}}
    <div class="articles-div">
        <h2 class="article-title">Top Articles</h2>
        @foreach ($articles as $data)
            <div class="card mb-4 card-content">
                <div class="card-bodyz card-container">
                    <p class="card-text">{{ $data['timestamp'] }}</p>
                    <h5 class="card-title">{{ $data['title'] }}</h5>
                    <a href="https://www.liputan6.com/">Baca Selengkapnya</a>
                </div>
                <img style="object-fit: cover" src="{{ $data['image'] }}" class="card-img-top" alt="...">

            </div>
        @endforeach
    </div>

    @extends('.component/navbar')
</body>

</html>
