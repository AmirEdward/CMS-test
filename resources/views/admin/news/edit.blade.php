@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.news.update', $news) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="title">Title:
                <input class="form-control" type="text" name="title" id="title" value="{{ $news->title }}">
            </label>
        </div>
        <div class="form-group">
            <label for="photo">Main Photo:
                <input type="file" name="main_photo" id="photo">
            </label>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" name="category" id="category">
                <option value="0">Select Category</option>
                @if(count(App\Category::all()))
                    @foreach(App\Category::all() as $category)
                        <option {{ $news->category->id === $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="content">Content:
                <textarea class="form-control" name="body" id="content" cols="100" rows="7">{{ $news->content }}</textarea>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        @if(count($errors->all()))
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </form>
@endsection