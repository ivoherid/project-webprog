<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #A38881;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            border-radius: 10px;
            background-color: #31393B;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
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
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card p-4">
                <h2 class="mb-4">BarberQ</h2>
                <div class="mb-3">
                    <a href="{{ url('login') }}" class="btn btn-black btn-lg w-100 mb-3">Login</a>
                    <a href="{{ url('register') }}" class="btn btn-gold btn-lg w-100">Register</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
