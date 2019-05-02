@extends('layouts.app')

@section('content')


    <form method="post" action="{{ route('contacts_insert') }}">
        <input type="text" name="contact_name">
        <input type="submit" value="insert">
        {{ csrf_field() }}
    </form>



    @foreach($contacts as $contact)
        {{ $contact }} <br>
    @endforeach
@endsection