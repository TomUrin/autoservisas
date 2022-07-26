<div class="card mb-4">
    <div class="card-header">Sort Filter Search</div>
    <div class="card-body">
        <form class="delete" action="{{route('workshops-index')}}" method="get">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>What sort do you want?</label>
                            <select class="form-control" name="sort">
                                {{-- <option value="default" @if($sort=='default' ) selected @endif>Default sort</option> --}}
                                <option value="workshops-asc" >Workshops A-Z</option>
                                <option value="workshops-desc" >Workshops Z-A</option>
                                {{-- <option value="animal-asc" @if($sort=='animal-asc' ) selected @endif>Animal A-Z</option>
                                <option value="animal-desc" @if($sort=='animal-desc' ) selected @endif>Animal Z-A</option> --}}
                            </select>
                        </div>


                    </div>
                    {{-- <div class="col-4">
                        <div class="form-group">
                            <label>What color?</label>
                            <select class="form-control" name="color_id">
                                <option value="0" @if($filter==0) selected @endif>No Filter, please</option>
                                @foreach($colors as $color)
                                <option value="{{$color->id}}" @if($filter==$color->id) selected @endif>{{$color->title}}</option>
                                @endforeach
                            </select>
                        </div> --}}

                    {{-- </div> --}}
                    <div class="col-5">
                        <button type="submit" class="btn btn-outline-warning m-2 mt-4">Sort!</button>
                        <a class="btn btn-outline-success m-2 mt-4" href="{{route('workshops-index')}}">Clear!</a>
                    </div>

                </div>
            </div>
        </form>
        {{-- <form class="delete" action="{{route('front-index')}}" method="get">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label>Do search</label>
                            <input class="form-control" type="text" name="s" value="{{$s}}"/>
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-outline-warning mt-4">Search!</button>
                    </div>
                </div>
            </div>
        </form> --}}
    </div>
</div>