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
                <div class="d-grid gap-2">
                    <a class="btn btn-outline-success mb-2" href="{{route('mechanics-create')}}">Click here to add new mechanic</a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">EMAIL</th>
                                <th scope="col">DATE</th>
                                <th scope="col">SERVICE</th>
                                <th scope="col"></th>
                        </thead>
                        @foreach($clients as $client)
                        <tbody>
                            <tr>
                            @if (Auth::user()->role > 9)
                            @if($client->role < 9)
                                <td scope="row"> {{$client->email}} </td>
                                <td scope="row"> {{$client->date}} </td>
                                <td scope="row"> {{$client->service}} </td>
                                <td scope="row" class="actions">
                                <a class="btn btn-outline-info btn-sm me-2 mb-3" href="{{route('clients-show', $client->id)}}">SHOW</a>
                                <a class="btn btn-outline-warning btn-sm me-2 mb-3" href="{{route('clients-edit', $client)}}">EDIT</a>
                                    <form method="POST" action="{{route('clients-delete', $client)}}">
                                        <button class="btn btn-outline-danger btn-sm mb-3"  type="submit">DELETE</button>
                                </td>
                                @endif
                                @endif
                               
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
@endsection