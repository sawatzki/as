@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('contact_update',['contact'=>$contact->id])}}">

        <div class="form-group row {{$errors->has('name') ? 'has-error': ''}}">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ $contact->name }}</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control" value="{{old('name', $contact->name)}}" name="name" required>
                @if ($errors->has('name'))
                    <span class="help-block" role="alert">
                                        <strong>{{$errors->first('name')}}</strong>
                                        </span>
                @endif
            </div>
        </div>

        {{ csrf_field() }}
        @method('PATCH')

        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                upd
            </button>
        </div>

    </form>
@endsection