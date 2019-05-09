@extends('layouts.app')

@section('content')

    <form method="post" action="{{ route('contact_insert') }}">
        <input type="text" name="contact_name">
        <input type="submit" value="Insert">
        {{ csrf_field() }}
    </form>

    @foreach($contacts as $contact)
        <a href="{{ route('contact_details', ['contact'=>$contact]) }}">{{ $contact->name }}</a><br>
        <form method="post" action="{{ route('contact_delete', ['contact'=>$contact]) }}">
            <input type="submit" value="delete">
            {{ csrf_field() }}
            @method('DELETE')
        </form>
    @endforeach
@endsection