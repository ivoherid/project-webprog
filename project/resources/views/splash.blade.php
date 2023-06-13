<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&family=Montserrat:wght@500&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Cormorant', serif;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Poppins', sans-serif;
            background-color: #A38881;
        }

        .card {
            max-width: 400px;
            margin: 0;
            border-radius: 10px;
            background-color: #31393B;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            color: white
        }

        .btn-gold {
            background-color: #896E38;
            color: white
        }

        .btn-black {
            background-color: #31393B;
            color: white
        }
    </style>
</head>

<body>
    <div class="container" style="margin: 0; height: 0;">
        <img src="{{ asset('img/LogoBBQ.png') }}" alt="" style="margin-top:40%; widht:90%; margin-left:5%;">
        <div class="d-flex justify-content-center align-items-center">
            <div class="mb-3" style="width: 70%; margin-top: 85%;">
                <a href="{{ url('login') }}" class="btn btn-black btn-lg w-100 mb-3"
                    style="box-shadow: 1.5px 1.5px 1.5px 1.5px rgb(47, 47, 47);">Login</a>
                <a href="{{ url('register') }}" class="btn btn-gold btn-lg w-100"
                    style="box-shadow: 2px 2px 2px 2px rgb(47, 47, 47);">Register</a>
            </div>
        </div>
    </div>
</body>

</html>
