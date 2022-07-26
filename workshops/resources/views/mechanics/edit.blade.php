@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

<!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme CSS files as mentioned below (and change the theme property of the plugin) -->
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />

<!-- important mandatory libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

<!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">Add or deduct funds</div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-success mb-2" href="{{route('mechanics-index')}}">Back to the mechanics list</a>
                    </div>
                    <form method="post" action="{{route('mechanics-update', $mechanics)}}" enctype="multipart/form-data">
                        <div class="form-group mt-4">
                            <label>Name</label>
                            <input name="newName" type="text" class="form-control" value="{{$mechanics->name}}">
                        </div>

                        <div class="form-group mt-4">
                            <label>Surname</label>
                            <input name="newSurname" type="text" class="form-control" value="{{$mechanics->surname}}">
                        </div>
                        
                        <div class="form-group mt-4">
                            <label>Photo</label>
                            <div>
                                <img class="photo-box" src="{{ $mechanics->image_path }}" />
                                <input name="mechanic_photo" type="file" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group-md mt-4">
                            <label>Workshop</label>
                            <div>
                                <select name="newWorkshop" class="form-select" id="inputGroupSelect01">
                                    @foreach($workshops as $workshop)

                                    <option value="{{$workshop->title}}">{{$workshop->title}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mx-auto mt-4">
                            <button type="submit" name="submit" value="send" class="btn btn-outline-success btn-sm">EDIT</button>
                        </div>
                        <div class="rating">
                            <label>Rating</label>
                            <input id="input-7" name="newRating" data-size="xs" class="rating rating-loading" data-show-clear="false" data-show-caption="false">
                        </div>
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-outline-success btn-sm">RATE</button>
                        </div>
                        @csrf
                        @method('put')
                    </form>
                    @if($mechanics->image_path)
                    <form method="post" action="{{route('mechanics-delete-picture', $mechanics)}}" enctype="multipart/form-data">
                    @csrf
                        @method('put')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete photo</button>
                        
                    </form>
                    @endif
<script>
    $(document).ready(function() {
        $('#input-3').rating({
            displayOnly: true,
            step: 0.5
        });
        $('#input-5').rating({
            clearCaption: 'No stars yet'
        });
        $('#input-8').rating({
            rtl: true,
            containerClass: 'is-star'
        });
        $('#input-9').rating();
    });
</script>
@endsection
