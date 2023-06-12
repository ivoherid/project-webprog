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
        margin: 8% 4%;
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
        <h5 style="color: #d8d8d6;">barber shop near me</h5>
    </div>

    <!-- ini buat for each -->
    @foreach ($barbershop as $items)
        <div class="container_barber">
            <img class="image_barber"
                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/89/1e/d1/caption.jpg?w=1200&h=-1&s=1"
                alt="Image">
            <div class="text1" style="color: #d8d8d6;">
                <h3>{{ $items->name }}</h3>
                <p>{{ $items->rating }}</p>
                <a href="{{ route('barbershop', ['id' => $items->id]) }}" style="position: absolute;right:10%; ;" class="btn btn-light" >Order Now</a>
            </div>
        </div>
    @endforeach

    @extends('.component/navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
