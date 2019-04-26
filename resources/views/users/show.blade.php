@extends('layouts.app')

@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <a href="{{ route('user_details', ['user'=>$user]) }}">
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            </a>
            @endforeach
        </tbody>
    </table>

@endsection