@extends('layouts.app')

@section('content')

    <form method="post" action="{{ route('contact_insert') }}">
        <input type="text" name="contact_name">
        <input type="submit" value="insert">
        {{ csrf_field() }}
    </form>

    @foreach($contacts as $contact)
        <a href="{{ route('contact_details') }}">{{ $contact->name }}</a><br>
    @endforeach
@endsection