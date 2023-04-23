@extends('layouts.app')

@section('title', 'Conference Creation Form')

@section('content')
    <form action="{{route('conferences.store') }}" method="POST">
        @csrf
        @include('conferences.partials.form');
    </form>
@endsection
