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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&family=Montserrat:wght@500&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    @if (session('success'))
        <div class="alert alert-success mb-3">
            {{ session('success') }}
        </div>
    @endif
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

    <form action="{{ route('order', ['id' => $barbershop->id]) }}" method="POST">
        @csrf
        <label for="barber" class="form-label">Input Your Barber Name</label>
        <input type="barber" class="form-control" id="barber" name="barber">
        <label for="service" class="form-label">Input Your Service</label>
        <input type="service" class="form-control" id="service" name="service">

        <button type="submit" class="btn btn-gold btn-lg w-100 mb-3">Submit</button>
    </form>
</body>

</html>
