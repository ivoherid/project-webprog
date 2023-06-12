<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #102526;
        color: #d8d8d6;
    }

    .container {
        background-color: #102526;
        padding: 0;
    }

    .profile_pic {
        clip-path: circle();
        width: 70px;
        object-fit: cover;
    }

    .commend {
        background-color: #896E38;
        border-radius: 10px;
        padding: 2%;
        margin: 2%;
        margin-bottom: 4%;
        display: flex;
        justify-content: flex-start;
        gap: 0;
        box-shadow: 3px 3px 3px 3px rgb(20, 20, 20);
    }

    .commend2 {
        display: flex;
        flex-direction: row;
        gap: 3%;
        margin: 0;
        width: 300px;
    }

    .image {
        display: block;
        margin: 0;
        margin-bottom: 2%;
        width: 100%;
        aspect-ratio: 2/1.2;
        object-fit: cover;
        box-shadow: 3px 3px 3px 3px rgb(33, 33, 33);
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
    }
</style>

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
            style="width: 90%; margin-left: 5%; margin-bottom:10%;">
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


    </div>
    @extends('.component/navbar')
</body>

</html>
