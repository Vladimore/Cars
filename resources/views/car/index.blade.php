<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car index</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="p-3">
    <a href="{{route('cars.create')}}" class="btn btn-success">Add</a>
</div>
<div class="p-3">
    <div class="container text-start">
        <div class="row">
            @foreach($cars as $car)
                <div class="col">
                    <a href="{{route('cars.show', $car->id)}} "
                       class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2"
                       style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
                        {{$car->mark}} {{$car->model}} </a>

                    <div class="p-2">
                        <img src="{{$car->image}}" height="200" alt="image">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
