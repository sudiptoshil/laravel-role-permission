@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route('permission.store')}}" method="POST">
            @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <select name="role_id" class="form-control">
                        <option value="">Please select a role</option>
                        @foreach(\App\Models\Role::all() as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                    <span class="text-danger">
                              {{$message}}
                          </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-8">
                <table>
                    <thead>
                    <tr>
                        <th>Permission</th>
                        <th>Add</th>
                        <th>Edit</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>List</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Roles</td>
                        <td><input type="checkbox" name="permission[role][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[role][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[role][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[role][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[role][list]" value="1"></td>

                    </tr>
                    <tr>
                        <td>Permissions</td>
                        <td><input type="checkbox" name="permission[permission][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[permission][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[permission][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[permission][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[permission][list]" value="1"></td>
                    </tr>
                    <tr>
                        <td>Users</td>
                        <td><input type="checkbox" name="permission[user][add]" value="1"></td>
                        <td><input type="checkbox" name="permission[user][edit]" value="1"></td>
                        <td><input type="checkbox" name="permission[user][view]" value="1"></td>
                        <td><input type="checkbox" name="permission[user][delete]" value="1"></td>
                        <td><input type="checkbox" name="permission[user][list]" value="1"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </form>
    </div>
@endsection
