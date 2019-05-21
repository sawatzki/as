@extends('layouts.app')

@section('content')

    <form method="post" action="{{ route('contact_insert') }}">
        <input type="text" name="contact_name">
        <input type="submit" value="Insert">
        {{ csrf_field() }}
    </form>

    @foreach($contacts as $contact)

        <div class="eventsWrapper__eventEntry">
                <a href="{{route('contact_details', ['id'=>$contact->id]) }}">
                    <div class="eventsWrapper__eventTitle">{{ $contact->name }}</div>
                </a>
            <div class="eventsWrapper__columnContainer">


                <div class="dropdown" style="text-align: left">
                    <button id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v">options</i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('contact_details', ['id'=>$contact->id])}}">
                            <button type="submit">
                                Beschreibung
                            </button>
                        </a>
                        <a class="dropdown-item" href="{{route('contact_update_form', ['id'=>$contact->id])}}">
                            <button type="submit">
                                Ändern
                            </button>
                        </a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item"
                           onclick="return confirm('Wirklich löschen ?');">
                            <form action="{{route('contact_delete',['project'=>$contact->id])}}" method="post">
                                {{csrf_field()}}
                                @method('DELETE')
                                <button type="submit">
                                    Löschen
                                </button>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection