@extends('layouts.app')

@section('content')
<h2>{{ $user->email }} - details</h2>
{{ $user->name }}<br>
@endsection