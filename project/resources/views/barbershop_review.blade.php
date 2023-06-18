<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/barbershop.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&family=Montserrat:wght@500&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <img class="image" src="https://i.ytimg.com/vi/KiP1k6Vsis0/maxresdefault.jpg" alt="">
        <h4 style="margin-left: 3%">{{ $barbershop->name }}</h4>
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
        <div class="btn-group" role="group" aria-label="Basic example" style="width: 90%; margin-left: 5%;">
            <a href="{{ route('barbershop_desc', ['id' => $barbershop->id]) }}" type="button" class="btn btn-secondary"
                style="width: 50%; height: 50px; ">Description</a>
            <a type="button" class="btn btn-secondary"
                style="width: 50%; height: 50px; background-color : #896E38;">Review</a>
        </div>

        @foreach ($review as $items)
            @if ($items->barbershop_id == $barbershop->id)
                <div class="commend">
                    <div class="commend2">
                        <img class="profile_pic"
                            src="https://i1.sndcdn.com/artworks-5aDBMLz7U2zE8hoL-D0dFww-t500x500.jpg" alt="error">
                        <div>
                            <h3>{{ $items->getUser->name }}</h3>
                            <h6>{{ $items->content }}</h5>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        <button type="button" id="contact" class="btn btn-lg btn-block">Contact</button>
    </div>
    @extends('.component/navbar')
</body>

</html>
