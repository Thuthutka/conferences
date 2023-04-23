@extends('layouts.app')

@section('title', 'Conference Edit')

@section('content')
    <form action="{{route('conferences.update', ['conference' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form');
        <div><input type="submit" value="Update"></div>
    </form>
@endsection
