@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Account</div>

                <div class="card-body">
                <div class="d-grid gap-2">
                    <a class="btn btn-outline-success mb-2" href="{{route('workshops-index')}}">Back to the accounts list</a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">CONTACTS</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td scope="row"> {{$workshops->address}} </td>
                                <td scope="row"> {{$workshops->title}} </td>
                                <td scope="row"> {{$workshops->contacts}} </td>
                            </tr>
                        </tbody>
                        @csrf
                        @method('show')
                        </form>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection