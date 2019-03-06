@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('success'))
                    <p class="alert" style="border: 1px solid green; padding: 5px; background: rgba(0,128,0,0.59); color: #fff">{{ Session::get('success') }}</p>
                @endif
            </div>
            <div class="col-md-4">
                <a href="{{ route('user.create') }}" class="add-btn pull-right"><i class="fa fa-plus-circle"></i>&nbsp;Add
                    User</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('form.create') }}" class="add-btn pull-right"><i class="fa fa-plus-circle"></i>&nbsp;Add
                Form</a>
        </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th width="1%"></th>
                                <th width="1%"></th>
                                <th width="1%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href="#" class="action-btn"><i class="fa fa-bars"></i></a></td>
                                    <td><a href="#" class="action-btn"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#" class="action-btn"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
