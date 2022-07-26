@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Add new mechanic</div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-success mb-5" href="{{route('mechanics-index')}}">Click here to see mechanics list</a>
                    </div>
                    <form class="create" action="{{route('mechanics-store')}}" method="post" type="submit">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control">
                            <div style="color: crimson;">{{ $errors->first('name') }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Surname</label>
                            <input name="surname" type="text" class="form-control">
                            <div style="color: crimson;">{{ $errors->first('surname') }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Photo</label>
                            <input name="photo" type="text" class="form-control">
                            <div style="color: crimson;">{{ $errors->first('photo') }}</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Workshop</label>
                            <div>
                            <select name="workshops" class="form-select-lg">
                            @foreach($workshops as $workshop)
                                <option value="{{$workshop->title}}">{{$workshop->title}}
                                </option>
                                @endforeach
                             </select>
                             </div
                            <div style="color: crimson;">{{ $errors->first('workshop') }}</div>
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