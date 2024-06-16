<div class="bg-secondary bg-gradient p-2 text-dark bg-opacity-50 border border-top-0 border-4 border-primary">
    <nav style="padding-top: 75px">
        <div class="container-fluid">
            <search role="search">
                <form class="d-flex text-center row-cols-auto" style="color:black" action="{{route('cars.search')}}"
                      method="GET">
                    <div>
                        <label for="mark">Mark</label>
                        <select class="form-select" aria-label="mark_id" name="mark_id">
                            <option disabled selected></option>
                            @foreach($marks as $mark)
                                <option
                                    value="{{$mark->id}}">{{$mark->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="model">Model</label>
                        <input class="form-control me-2" type="search" name="model" id="model">
                    </div>
                    <div>
                        <label for="year">Year</label>
                        <input class="form-control me-2" type="search" name="year" id="year">
                    </div>
                    <div>
                        <label for="price">Price, less than:</label>
                        <input class="form-control me-2" type="search" name="price" id="price">
                    </div>
                    <div>
                        <label for="description">Description part</label>
                        <input class="form-control me-2" type="search" name="description" id="description">
                    </div>
                    <div class="m-4">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </search>
        </div>
    </nav>
</div>
