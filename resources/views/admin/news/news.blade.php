@extends('admin.layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-grey-800">Show News: {{ $news->title ?? '' }}</h1>
    <p>News Title : </p>
    <h2>{{ $news->title }}</h2>

    <p>News Content: </p>
    <h2> {{ $news->content }}</h2>

    <p>Category:</p>
    <h3>{{ $news->category->name }}</h3>

@endsection