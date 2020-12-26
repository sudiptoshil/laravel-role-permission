@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @isset(Auth()->user()->role->permission['permission']['role']['add'])
                <a href="{{ route('role.create') }}" type="button" class="btn btn-primary">Add Role</a>
                @endisset
                <br />
                <br />
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Role Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                            @foreach ($allRole as $v_role)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $v_role->name }}</td>
                                    <td>
                                        <form action="{{ route('role.destroy', $v_role->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            @isset(Auth()->user()->role->permission['permission']['role']['edit'])
                                            <a href="{{ route('role.edit', $v_role->id) }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            @endisset
                                            @isset(Auth()->user()->role->permission['permission']['role']['delete'])
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            @endisset
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
