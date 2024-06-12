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
        <a href="{{route('cars.index')}}" class="btn btn-info">Back</a>
    </div>
</div>
<div class="p-3">
    <form action="{{route('cars.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="mark_id" class="form-label">Mark</label>
            <select class="form-select" aria-label="mark_id" name="mark_id">
                @foreach($marks as $mark)
                    <option value="{{$mark->id}}">{{$mark->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{old('model')}}">
            @error('model')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control" id="year" name="year" value="{{old('year')}}">
            @error('year')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
            @error('price')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</body>
</html>
