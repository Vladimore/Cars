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
<div class="d-flex justify-content-start">
    <div class="m-3">
        <a href="{{route('cars.index')}}" class="btn btn-info">Back</a>
        <a href="{{route('cars.edit', $car->id)}}" class="btn btn-success">Edit</a>
    </div>
</div>
<div class="p-3">
    <div class="border border-3">
    <div class="d-flex justify-content-center">
        <h2>@foreach($marks as $mark)
                {{$mark->id === $car->mark_id ? $mark->title : ''}}
            @endforeach
            {{$car->model}} / {{$car->year}} - {{$car->price}} р.</h2>
    </div>
    <div class="d-flex justify-content-center">
        <img src="{{$car->image}}" class="img-thumbnail" alt="image">
    </div>
    <div class="fs-4">
        <div class="border border-5">{{$car->description}}</div>
    </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Delete
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>Are you sure?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                <div>
                    <form action="{{route('cars.delete', $car->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
