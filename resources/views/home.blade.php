@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    {{-- <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div> --}}

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            Dashboard
                        </a>
                        {{-- {{ Auth()->user()->role->permission }} for testing purpose
                        --}}
                        @isset(Auth()->user()->role->permission['permission']['user']['list'])
                            <a href="{{ route('user.index') }}" class="list-group-item list-group-item-action">User</a>
                        @endisset
                        @isset(Auth()->user()->role->permission['permission']['role']['list'])
                            <a href="{{ route('role.index') }}" class="list-group-item list-group-item-action">Roles</a>
                        @endisset
                        @isset(Auth()->user()->role->permission['permission']['permission']['list'])
                            <a href="{{ route('permission.index') }}"
                                class="list-group-item list-group-item-action">Permission</a>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
