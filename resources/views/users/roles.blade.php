@extends('layouts.app')

@section('content')
    <h2>ROLES</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Role</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <th scope="row">{{ $role->id }}</th>
                <td>{{ $role->name }}</td>
                <td>{{ $role->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection