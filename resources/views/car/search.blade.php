<div class="mb-4 bg-secondary bg-opacity-100 border border-info border-0 rounded">
    <nav style="padding-top: 75px">
        <div class="container-fluid">
            <search role="search">
                <form class="d-flex text-center row-cols-sm-6"
                      style="color:black; justify-content: space-around"
                      action="{{route('cars.search')}}"
                      method="GET">
                    <div class="p-3">
                        <label for="mark">Mark</label>
                        <select class="form-select" aria-label="mark_id" name="mark_id">
                            <option disabled selected></option>
                            @foreach($marks as $mark)
                                <option
                                    value="{{$mark->id}}">{{$mark->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="p-3">
                        <label for="model">Model</label>
                        <input class="form-control me-2" type="search" name="model" id="model">
                    </div>
                    <div class="p-3">
                        <label for="year">Year</label>
                        <input class="form-control me-2" type="search" name="year" id="year">
                    </div>
                    <div class="p-3">
                        <label for="price">Price, less than:</label>
                        <input class="form-control me-2" type="search" name="price" id="price">
                    </div>
                    <div class="p-3">
                        <label for="description">Description part</label>
                        <input class="form-control me-2" type="search" name="description" id="description">
                    </div>
                    <div class="m-4">
                        <button class="btn btn-outline-info" style="height: 50px; width: 50px" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </search>
        </div>
    </nav>
</div>
