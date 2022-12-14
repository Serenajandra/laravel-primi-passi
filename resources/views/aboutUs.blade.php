<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center my-3">
            Who are we?
        </h2>
        <div class="container d-flex justify-content-center">
            <div class="mx-3">
                <h3>Umani</h3>
                <ul>
                    @foreach ($humans as $human)
                        <li>{{ $human }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mx-3">
                <h3>Canidi</h3>
                <ul>
                    @foreach ($dogs as $dog)
                        <li>{{ $dog }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mx-3">
                <h3>Felini</h3>
                @foreach ($cats as $cat)
                    <li>{{ $cat }}</li>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
