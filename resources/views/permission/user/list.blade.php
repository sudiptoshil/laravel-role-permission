@extends('layouts.app')
@push('js')

@endpush
@push('css')

@endpush

@section('content')
    <div class="container">
        <div class="row">

            @isset(auth()->user()->role->permission['permission']['user']['add'])
                <h4 class="float-right">
                    <a class="btn btn-primary" href="{{route('user.create')}}">Add New</a>
                </h4>
            @endisset
            <table class="table">

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>
                            <form action="{{route('user.destroy',$user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                @isset(auth()->user()->role->permission['permission']['user']['edit'])
                                    <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                                @endisset
                                @isset(auth()->user()->role->permission['permission']['user']['delete'])
                                    <button class="btn btn-danger">Delete</button>
                                @endisset
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
