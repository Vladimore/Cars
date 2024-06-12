<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car index</title>
    @vite(['resources/sass/app.scss', 'resources/js/app,js'])
</head>
<body>
<div class="d-flex justify-content-start">
    <div class="m-3">
        <a href="{{route('cars.show', $car->id)}}" class="btn btn-info">Back</a>
    </div>
</div>
<div class="p-3">
    <form action="{{route('cars.update', $car->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="mark_id" class="form-label">Mark</label>
            <select class="form-select" aria-label="mark_id" name="mark_id">
                @foreach($marks as $mark)
                    <option
                        {{$mark->id === $car->mark_id ? 'selected' : ''}}
                        value="{{$mark->id}}">{{$mark->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{$car->model}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{$car->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control" id="year" name="year" value="{{$car->year}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$car->price}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$car->image}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
