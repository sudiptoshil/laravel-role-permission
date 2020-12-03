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
                        <a href="" class="list-group-item list-group-item-action">User</a>
                        <a href="{{ route('role.index') }}" class="list-group-item list-group-item-action">Roles</a>
                        <a href="#" class="list-group-item list-group-item-action">Permission</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
