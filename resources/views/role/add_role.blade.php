@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('role.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role Name</label>
                        <input type="text" class="form-control" name="role_name"  placeholder="Enter Role Name">
                        @error('role_name')
                            {{ $message }}
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('role.index')}}" type="button" class="btn btn-success">Manage Role</a>
                </form>
            </div>
        </div>
    </div>
@endsection
