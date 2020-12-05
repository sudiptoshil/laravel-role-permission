@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('role.update',$role->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role Name</label>
                        <input type="text" value="{{ $role->name }}" class="form-control" name="name"
                            placeholder="Enter Role Name">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('role.index') }}" type="button" class="btn btn-success">Manage Role</a>
                </form>
            </div>
        </div>
    </div>
@endsection
