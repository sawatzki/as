@extends('layouts.app')

@section('content')

    @foreach($users as $user)
        <a href="{{ route('user_details', ['user'=>$user]) }}">
        {{ $user->id . ": " . $user->name }} <br>
        {{ $user->email }} <hr>
        </a>
    @endforeach

@endsection