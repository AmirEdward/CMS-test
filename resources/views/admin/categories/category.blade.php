@extends('admin.layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-grey-800">Show Categories: {{ $category->name ?? '' }}</h1>
    <p>Category Name : </p>
    <h2>{{ $category->name}}</h2>

@endsection