<!doctype html>
<html lang="en">
<style>
    .body {
        padding: 0;
        margin: 0;
        border: 0;
        background-color: #102526;
        color: #d8d8d6;
    }

    .image {
        display: block;
        margin: 0 0;
        height: 300px;
        width: 100%;
    }

    .container {
        text-align: center;
        color: black;
        font-size: 24px;
        width: 100%;
        background: linear-gradient(to top, #896E38 0%, #102526 100%);
        border-radius: 10px;
        box-shadow: 3px 3px 3px 3px rgb(20, 20, 20);
        margin-bottom: 3%;
    }

    .review {
        background-color: #896E38;
        margin: 3% 3%;
        color: #d8d8d6;
        border-radius: 10px;
        padding: 2% 3%;
        box-shadow: 3px 3px 3px 3px rgb(20, 20, 20);
    }

    .text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .profile_pic {
        clip-path: circle();
        width: 30%;
        margin-top: 10%;
    }

    .history_pic {
        width: 120px;
        aspect-ratio: 1 / 1;
        object-fit: cover;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="body">

    <div class="container" style="padding-bottom: 5%;">

        <!-- button klo bsa diganti -->

        <div style="text-align: left;">
            <button type="button" class="btn btn-outline-light" style="position: absolute; margin: 2%;">Back</button>
        </div>
        <img class="profile_pic" src="https://i1.sndcdn.com/artworks-5aDBMLz7U2zE8hoL-D0dFww-t500x500.jpg"
            alt="">
        <h3>{{ auth()->user()->name }}</h3>
        <h5>{{ auth()->user()->email }}</h5>
    </div>
    </div>

    <!-- buat for each history -->

    <div class="history">
        <h2 class="history-title">History</h2>

        <div class="history-profile">
            @foreach ($history as $item)
                @if ($item->user_id == auth()->user()->id)
                    <h6>{{ $item->getShop->name }}</h6>
                @endif
            @endforeach
        </div>
    </div>

    <!-- buat for each command  -->
    @foreach ($review as $item)
        {{-- <img class="profile_pic" src="https://i1.sndcdn.com/artworks-5aDBMLz7U2zE8hoL-D0dFww-t500x500.jpg"
            alt=""> --}}

        @if ($item->user_id == auth()->user()->id)
            <div class="review">
                <h6>{{ auth()->user()->name }}</h6>
                <h6>{{ $item->content }}</h6>
            </div>
        @endif
    @endforeach
    @extends('.component/navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
