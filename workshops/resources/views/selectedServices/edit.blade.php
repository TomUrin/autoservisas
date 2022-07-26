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
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Add or deduct funds</div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-success mb-2" href="{{route('mechanics-index')}}">Back to the mechanics list</a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">NAME</th>
                                <th scope="col">SURNAME</th>
                                <th scope="col">PHOTO</th>
                                <th scope="col">WORKSHOP</th>
                                <th scope="col">RATING</th>
                            </tr>
                        </thead>
                        <form method="post" action="{{route('mechanics-update', $mechanics)}}">
                            <tbody>
                                <tr>

                                    <td scope="row">
                                       <select name="newWorkshop" class="form-select-sm" id="inputGroupSelect01">
                                            @foreach($workshops as $workshop)
                                            <option value="{{$workshop->title}}">{{$workshop->title}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td scope="row">
                                        <select name="newWorkshop" class="form-select-sm" id="inputGroupSelect01">
                                            @foreach($workshops as $workshop)
                                            <option value="{{$workshop->title}}">{{$workshop->title}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td scope="row">
                                        <select name="newWorkshop" class="form-select-sm" id="inputGroupSelect01">
                                            @foreach($workshops as $workshop)
                                            <option value="{{$workshop->title}}">{{$workshop->title}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <div class="mx-auto">
                                            <button type="submit" name="submit" value="send" class="btn btn-outline-success btn-sm">EDIT</button>
                                        </div>
                                    </td>
                                    <td scope="row" class="rating">
                                        <input id="input-7" name="newRating" data-size="xs" class="rating rating-loading" data-show-clear="false" data-show-caption="false">
                                    </td>
                                    <td>
                                        <div class="mx-auto">
                                            <button type="submit" name="submit" value="send" class="btn btn-outline-success btn-sm">RATE</button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                            @csrf
                            @method('put')
                        </form>
                    </table>
                    <script>
                        $(document).ready(function() {
                            $('#input-3').rating({
                                displayOnly: true
                                , step: 0.5
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
