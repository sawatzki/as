@extends('layouts.app')

@section('content')

    <table>
        <tr>
            <td>{{ $contact->name }}</td>
        </tr>
    </table>

    {{ $contact }}
@endsection
