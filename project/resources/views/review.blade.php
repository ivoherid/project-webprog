<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('review', ['id' => $barbershop->id]) }}" method="POST">
        @csrf
        <input type="review" class="form-control" id="review" name="review" placeholder="what's your opinion ?">
        <button type="submit" class="btn btn-gold btn-lg w-100 mb-3">Submit</button>
    </form>
</body>

</html>
