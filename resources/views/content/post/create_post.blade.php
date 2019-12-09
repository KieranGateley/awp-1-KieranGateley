@extends('bases.content')

@section('title', 'Create New Post')

@section('content')
    @csrf
    <form action="{{ route('create_post') }}" method="post">
        @include('parts.post.form', [ $title = "", $body = ""])
    </form>
@endsection