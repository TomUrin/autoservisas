@extends('layouts.app')
@section('title')
Car repair workshops
@endsection
@section('image')
<div class= “header-image”>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
        @include('front.box')
            <div class="card">
                <div class="card-header">Workshops list</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">CONTACTS</th>
                                <th scope="col"></th>
                        </thead>
                        @foreach($workshops as $workshop)
                        <tbody>
                            <tr>
                                <td scope="row"> {{$workshop->address}} </td>
                                <td scope="row"> {{$workshop->title}} </td>
                                <td scope="row"> {{$workshop->contacts}} </td>
                                <td scope="row" class="actions">
                                <a class="btn btn-outline-info btn-sm me-2 " href="{{route('workshops-show', $workshop->id)}}">SHOW</a>
                                    <form method="POST" action="{{route('workshops-delete', $workshop)}}">
                                        <button class="btn btn-outline-warning btn-sm"  type="submit">DELETE</button>
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

@endsection