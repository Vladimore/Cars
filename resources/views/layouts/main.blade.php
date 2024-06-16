@extends('car.index')
@section('content')
    <div class="p-3">
        <a href="{{route('cars.create')}}" class="btn btn-success">Add</a>
    </div>
    <div class="p-3">
        <div class="container text-start">
            <div class="row">
                @foreach($cars as $car)
                    <div class="col-lg-4">
                        <a href="{{route('cars.show', $car->id)}} "
                           class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2"
                           style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
                            @foreach($marks as $mark)
                                {{$mark->id === $car->mark_id ? $mark->title : ''}}
                            @endforeach
                            {{$car->model}} </a>

                        <div class="p-2">
                            <img src="{{$car->image}}" height="200" alt="image">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{$cars->withQueryString()->links()}}
    </div>
@endsection
