@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>New Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/sample01/blogs" enctype="multipart/form-data">　
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea class="form-control" name="content">{{old('content')}}</textarea>
    </div>
    <div class="form-group">
        <label>イメージ</label>
        <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
    
</form>

<a href="/sample01/blogs">Back</a>

@endsection
