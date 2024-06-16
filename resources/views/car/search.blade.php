<nav class="navbar bg-body-tertiary justify-content-sm-center">
    <div class="container-fluid">
        <search role="search">
            <form class="d-flex text-center row-cols-md-4" action="{{route('cars.search')}}" method="GET">
                <div>
                    <label for="mark">Mark</label>
                    <select class="form-select" aria-label="mark_id" name="mark_id">
                        <option disabled selected ></option>
                        @foreach($marks as $mark)
                            <option
                                value="{{$mark->id}}">{{$mark->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="model">Model</label>
                    <input class="form-control me-2" type="search" name="model" id="model" >
                </div>
                <div>
                    <label for="year">Year</label>
                    <input class="form-control me-2" type="search"  name="year" id="year">
                </div>
                <div>
                    <label for="price">Price, less than:</label>
                    <input class="form-control me-2" type="search" name="price" id="price">
                </div>
                <div>
                    <label for="description">Description part</label>
                    <input class="form-control me-2" type="search" name="description" id="description">
                </div>
                <div class="m-3">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>
        </search>
    </div>
</nav>
