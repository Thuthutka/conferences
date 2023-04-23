@extends('layouts.app')

@section('content')
        <h2>List of conferences</h2>
        @guest()
        @else
        <a href="{{ route('conferences.create') }}"><button type="button">Create conference</button></a>
        @endguest
        @each('conferences.partials.list', $conferences, 'conference')
@endsection
