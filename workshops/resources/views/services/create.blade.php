@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Add new mechanic</div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-success mb-5" href="{{route('services-index')}}">Click here to see services list</a>
                    </div>
                    <form class="create" action="{{route('services-store')}}" method="post" type="submit">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name of the service</label>
                            <input name="title" type="text" class="form-control">
                            <div style="color: crimson;">{{ $errors->first('title') }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Repair time in hours</label>
                            <input name="duration" type="text" class="form-control">
                            <div style="color: crimson;">{{ $errors->first('duration') }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Price</label>
                            <input name="price" type="text" class="form-control">
                            <div style="color: crimson;">{{ $errors->first('price') }}</div>
                        </div>
                        <div class="mx-auto">
                            <button type="submit" name="submit" value="send" class="btn btn-outline-success mt-5 btn-lg">ADD</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection