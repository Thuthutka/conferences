@extends('layouts.app')

@section('content')
        <h1><b>Title: </b>{{ $conference['title'] }}</h1>
        <p><b>Content: </b>{{ $conference['content'] }}</p>
        <p><b>Date: </b>{{ $conference['date'] }}</p>
        <p><b>Address: </b>{{ $conference['address'] }}</p>

    @if(session('status'))
        <div>{{session('status')}}</div>
    @endif
        <a href="{{ route('conferences.index') }}"><button>Go to the main page</button></a>
@endsection
