<!doctype html>
<html lang="en">
<style>

</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
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
    <h2 class="history-title">History</h2>
    <div class="history">


        <div class="history-profile">
            @foreach ($history as $item)
                @if ($item->user_id == auth()->user()->id)
                    <div class="history-content">
                        <img class="history_pic"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/89/1e/d1/caption.jpg?w=1200&h=-1&s=1"
                            alt="foto-barber">
                        <h6>{{ $item->getShop->name }}</h6>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- buat for each command  -->
    <div class="review-container">
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
    </div>
    @extends('.component/navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
