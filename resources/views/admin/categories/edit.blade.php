@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="name">Name:
                <input class="form-control" type="text" name="name" id="name" value="{{ $category->name }}">
            </label>
        </div>

        <button class="btn btn-primary" type="submit">Edit</button>
    </form>
    @if(count($errors->all()))
        @foreach($errors->all() as $error)
            <div class="alert alert-danger mt-3">
                {{ $error }}
            </div>
        @endforeach
    @endif
@endsection