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
        <h3>rating : 5</h3>
        @foreach ($review as $items)
            @if ($items->barbershop_id == $barbershop->id)
                <div class="commend" style="">
                    <div class="commend2">
                        <img class="profile_pic"
                            src="data:image/jpeg;base64,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"
                            alt="">
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
