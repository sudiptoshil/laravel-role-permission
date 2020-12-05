@extends('layouts.app')
@push('js')

@endpush
@push('css')

@endpush

@section('content')
    <div class="container">
        <form action="{{route('permission.update',$permission->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="role_id" class="form-control">
                            <option value="">Please select a role</option>
                            @foreach(\App\Models\Role::all() as $role)
                                <option value="{{$role->id}}"
                                        @if($role->id===$permission->role_id) selected @endif>{{$role->name}}</option>
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
                    <table class="responsive-table-input-matrix">
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
                            <td>
                                <input type="checkbox" name="permission[role][add]"
                                       @isset($permission['permission']['role']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[role][edit]"
                                       @isset($permission['permission']['role']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[role][view]"
                                       @isset($permission['permission']['role']['view']) checked @endisset
                                       value="1">

                            </td>
                            <td>
                                <input type="checkbox" name="permission[role][delete]"
                                       @isset($permission['permission']['role']['delete']) checked @endisset
                                       value="1" >
                            </td>
                            <td>
                                <input type="checkbox" name="permission[role][list]"
                                       @isset($permission['permission']['role']['list']) checked @endisset
                                       value="1">
                            </td>

                        </tr>
                        <tr>
                            <td>Permissions</td>
                            <td>
                                <input type="checkbox" name="permission[permission][add]"
                                       @isset($permission['permission']['permission']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[permission][edit]" value="1"
                                       @isset($permission['permission']['permission']['edit']) checked @endisset
                                >
                            </td>
                            <td>
                                <input type="checkbox" name="permission[permission][view]" value="1"
                                       @isset($permission['permission']['permission']['view']) checked @endisset
                                ></td>
                            <td>
                                <input type="checkbox" name="permission[permission][delete]"
                                       @isset($permission['permission']['permission']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[permission][list]"
                                       @isset($permission['permission']['permission']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Users</td>
                            <td>
                                <input type="checkbox" name="permission[user][add]"
                                       @isset($permission['permission']['user']['add']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[user][edit]"
                                       @isset($permission['permission']['user']['edit']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[user][view]"
                                       @isset($permission['permission']['user']['view']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[user][delete]"
                                       @isset($permission['permission']['user']['delete']) checked @endisset
                                       value="1">
                            </td>
                            <td>
                                <input type="checkbox" name="permission[user][list]"
                                       @isset($permission['permission']['user']['list']) checked @endisset
                                       value="1">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
@endsection
