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
            background-color: #31393B;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            border-radius: 10px;
            background-color: #31393B;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            color: white
        }

        .btn-gold {
            background-color: #896E38;
            color: white
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your password">
                    @if ($errors->has('credentials'))
                        <div class="text-danger">{{ $errors->first('credentials') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-gold btn-lg w-100 mb-3">Login</button>
                <a href="{{ url('register') }}" class="btn btn-gold btn-lg w-100">Not signed up?</a>
            </form>
        </div>
    </div>
</body>

</html>
