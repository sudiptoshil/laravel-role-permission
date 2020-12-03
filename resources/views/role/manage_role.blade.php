@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <a href="{{route('role.create')}}" type="button" class="btn btn-primary">Add Role</a>
            <br/>
            <br/>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Role Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i =1)
                        @foreach($allRole as $v_role)
                        <tr>
                        <th scope="row">{{$i++}}</th>
                            <td>{{$v_role->name}}</td>
                            <td>
                                <a href="" type="button" class="btn btn-warning">Edit</a>
                                <a href="" type="button" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
