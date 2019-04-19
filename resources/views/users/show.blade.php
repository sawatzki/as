@extends('layouts.app')

@section('content')

    @foreach($users as $user)
        {{  $user->id . ": " . $user->name }} <br>
        {{ $user->email }} <hr>
    @endforeach

@endsection