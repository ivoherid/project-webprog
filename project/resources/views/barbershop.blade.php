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
        display: flex;
        justify-content: flex-start;
        gap: 0;
    }

    .commend2 {
        display: flex;
        flex-direction: row;
        gap: 3%;
        margin: 0;
        width: 300px;
    }
</style>

<body>
    <div class="container">
        <img src="" alt="">
        <h4>Barber {{ $barbershop->name }}</h4>
        <h4>rating : 5</h4>
        @foreach ($review as $items)
            @if ($items->barbershop_id == $barbershop->id)
                <div class="commend">
                    <div class="commend2">
                        <img class="profile_pic"
                            src="https://i1.sndcdn.com/artworks-5aDBMLz7U2zE8hoL-D0dFww-t500x500.jpg"
                            alt="error">
                        <div>
                            <h3>{{ $items->getUser->name }}</h3>
                            <h5>{{ $items->content }}</h5>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach ($barber as $items)
            @if ($items->barbershop_id == $barbershop->id)
                <h1>{{ $items->name }}</h1>
            @endif
        @endforeach
    </div>
</body>

</html>
