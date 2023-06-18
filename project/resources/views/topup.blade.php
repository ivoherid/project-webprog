<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opinion Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #31393B;
        }

        .opinion-form {
            margin-top: 2rem;
            width: 80%;
            max-width: 600px;
        }

        .btn-submit {
            margin-top: 1rem;
            background-color: #896E38;
            color: white;
        }

        .page-title {
            color: white
        }

        .msg {
            color: white
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="page-title">Top up Amount</h1>

        <form class="opinion-form" action="" method="POST">
            <div class="form-group">
                <label class="msg" for="message">Amount</label>
                @csrf
                <input type="top-up" class="form-control" id="top-up" name="top-up">
            </div>

            <button type="submit" class="btn btn-lg w-100 btn-submit">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+UC5r4qA9BAqKDe6g6BbBkb3IqIxyD4Nn6rs5vmg6BdAiS6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
