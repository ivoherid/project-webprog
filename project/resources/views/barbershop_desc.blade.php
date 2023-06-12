<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/barbershop.css') }}">
</head>

<body>
    <div class="container">
        <img class="image" src="https://i.ytimg.com/vi/KiP1k6Vsis0/maxresdefault.jpg" alt="">
        <h4 style="margin-left: 3%">Barber {{ $barbershop->name }}</h4>
        <p style="margin-left: 3%">rating :
            @for ($i = 0; $i < $barbershop->rating; $i++)
                @if ($barbershop->rating - $i < 1)
                    <img src="{{ asset('img/halfstar.png') }}" style="width:
                    10px" alt="">
                @else
                    <img src="{{ asset('img/fullstar.png') }}" style="width: 10px" alt="">
                @endif
            @endfor
        </p>
        <div class="btn-group" role="group" aria-label="Basic example"
            style="width: 90%; margin-left: 5%;margin-bottom:10%;">
            <a href="" type="button" class="btn btn-secondary"
                style="width: 50%; height: 50px;  background-color : #896E38;">Description</a>
            <a href="{{ route('barbershop_review', ['id' => $barbershop->id]) }}" class="btn btn-secondary"
                style="width: 50%; height: 50px;">Review</a>
        </div>
        <div>

            <div class="desc">
                <h3 class="desc-text">
                    Description :
                </h3>
                <h6 class="desc-content">
                    {{ $barbershop->description }}
                </h6>
            </div>

            <div class="location">
                <h3 class="location-text">Location :</h3>
                <h6 class="address">{{ $barbershop->address }}</h6>
            </div>

        </div>


        <h2 class="barber-title">Barbers</h2>
        <div class="barber-profile">
            @foreach ($barber as $items)
                @if ($items->barbershop_id == $barbershop->id)
                    <div class="card barbercontent">
                        <div class="barber-description">
                            <img class="barber-image" src="{{ asset('img/tony.png') }}" alt="">
                            <h6 class="barber-text">{{ $items->name }}</h6>
                            <p class="barber-text">Barber {{ $items->barbershop }}</p>
                            <div class="barber-rating">
                                <img class="ic_star" src="{{ asset('img/fullstar.png') }}" alt="">
                                <p class="barber-text">{{ $items->rating }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


        @extends('.component/navbar')
</body>

</html>
