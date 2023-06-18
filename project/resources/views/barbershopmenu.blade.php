<!doctype html>
<html lang="en">
<style>
    body {
        background-color: #102526;
        color: #d8d8d6;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .container {
        position: relative;
        text-align: center;
        color: white;
        font-size: 24px;
        margin: 0;
        padding: 0;
    }

    .text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .container_barber {
        display: flex;
        align-items: flex-start;
        margin: 4% 4%;
        padding: 8px;
        background-color: #896E38;
        border-radius: 10px;
        box-shadow: 3px 3px 3px 3px rgb(22, 22, 22);
    }

    .image_barber {
        width: 30%;
        aspect-ratio: 1.3 / 1;
        object-fit: cover;
        margin-right: 2%;
        border-radius: 10px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&family=Montserrat:wght@500&family=Poppins:wght@500&display=swap"
    rel="stylesheet">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
</head>

<body style="background-color: #102526;">
    <!-- ini buat yang map -->

    <div class="container">
        <form class="d-flex" role="search"
            style="padding: 2% 2%; position: absolute;top: 0%; left: 5%;   transform: translate(0%, 0%); width: 90%;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button type="button" class="btn btn-dark">Search</button>
        </form>
    </div>
    <img class="image" src="https://t4.ftcdn.net/jpg/02/59/49/93/360_F_259499366_ytGqXw4RgHBUHBteftXKtpqTs6qiscIh.jpg"
        alt="Image">
    <div style="margin: 0% 2%;">
        <h5 style="color: #d8d8d6; margin-top:4%">Barbershop near me</h5>
    </div>

    <!-- ini buat for each -->
    @foreach ($barbershop as $items)
        <div class="container_barber">
            <img class="image_barber"
                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/89/1e/d1/caption.jpg?w=1200&h=-1&s=1"
                alt="Image">
            <div class="text1" style="color: #d8d8d6;">
                <h3>{{ $items->name }}</h3>
                <p>rating :
                    @for ($i = 0; $i < $items->rating; $i++)
                        @if ($items->rating - $i < 1)
                            <img src="{{ asset('img/halfstar.png') }}" style="width:
                        10px"
                                alt="">
                        @else
                            <img src="{{ asset('img/fullstar.png') }}" style="width: 10px" alt="">
                        @endif
                    @endfor
                </p>

            </div>
            <div>
                <a href="{{ route('barbershop_desc', ['id' => $items->id]) }}"
                    style="position: absolute;right:6%; margin-top:45px;box-shadow: 2px 2px 2px 2px rgb(46, 46, 46);"
                    class="btn btn-light">Order Now</a>
            </div>
        </div>
    @endforeach

    @extends('.component/navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
