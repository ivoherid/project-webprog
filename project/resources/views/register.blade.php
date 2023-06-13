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
            color: white;
        }

        .btn-gold {
            background-color: #896E38;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="mb-4">Register</h2>
            @if (session('success'))
                <div class="alert alert-success mb-3">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}"">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your password">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="Enter your primary address">
                </div>

                <button type="submit" class="btn btn-gold btn-lg w-100">Register</button>
            </form>
            <div class="mt-3">
                <a href="{{ route('login') }}" class="btn btn-gold btn-lg w-100">Go back to Login</a>
            </div>
        </div>
    </div>
</body>

</html>
