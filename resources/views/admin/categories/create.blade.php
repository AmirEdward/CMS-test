@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.categories.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:
                <input class="form-control" type="text" name="name" id="name">
            </label>
        </div>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    @if(count($errors->all()))
        @foreach($errors->all() as $error)
            <div class="alert alert-danger mt-3">
                {{ $error }}
            </div>
        @endforeach
    @endif
@endsection