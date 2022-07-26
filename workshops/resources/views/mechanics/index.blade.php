@extends('layouts.app')
@section('title')
Car repair workshops
@endsection
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
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">Mechanics list</div>

                <div class="card-body">
                    @if (Auth::user()->role > 9)
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-success mb-2" href="{{route('mechanics-create')}}">Click here to add new mechanic</a>
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">NAME</th>
                                <th scope="col">SURNAME</th>
                                <th scope="col">PHOTO</th>
                                <th scope="col">WORKSHOP</th>
                                <th scope="col">RATING</th>
                                <th scope="col"></th>
                        </thead>
                        @foreach($mechanics as $mechanic)
                        <tbody>
                            <tr>
                                <td scope="row"> {{$mechanic->name}} </td>
                                <td scope="row"> {{$mechanic->surname}} </td>
                                <td scope="row">
                                    @if($mechanic->image_path)
                                    <div class="p-2 m-2 w-72">
                                        <img class="photo-box" src="{{ $mechanic->image_path }}" />
                                    </div>
                                    @endif
                                </td>
                                <td scope="row"> {{$mechanic->worshop}} </td>
                                <td scope="row" class="rating">
                                    <input id="input-3" name="input-3" data-size="xs" class="rating rating-loading" data-show-clear="false" data-show-caption="false" value="{{ $mechanic->avrRating }}" readonly>
                                    Average: {{ $mechanic->avrRating }}/5 &#38 Ratings: {{ $mechanic->rate_count }}
                                </td>

                                <td scope="row">
                                    @if (Auth::user()->role > 9)
                                    <a class="btn btn-outline-info btn-sm me-2 " href="{{route('mechanics-show', $mechanic->id)}}">SHOW</a>
                                    <a class="btn btn-outline-warning btn-sm me-2 " href="{{route('mechanics-edit', $mechanic)}}">EDIT</a>
                                    @endif
                                    <form method="POST" action="{{route('mechanics-delete', $mechanic)}}">
                                        @if (Auth::user()->role > 9)
                                        <button class="btn btn-outline-danger btn-sm mt-2" type="submit">DELETE</button>
                                        @endif
                                        @if (Auth::user()->role < 9) <a class="btn btn-outline-info btn-sm me-2 mb-3" href="{{route('mechanics-edit', $mechanic->id)}}">RATE</a>
                                            @endif
                                </td>

                            </tr>
                        </tbody>
                        @csrf
                        @method('delete')
                        </form>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#input-3').rating({
            displayOnly: true
            , step: 0.25
        });
        $('#input-5').rating({
            clearCaption: 'No stars yet'
        });
        $('#input-8').rating({
            rtl: true
            , containerClass: 'is-star'
        });
        $('#input-9').rating();
    });

</script>
@endsection
