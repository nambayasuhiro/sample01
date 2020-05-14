@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>ブログ編集</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/sample01/blogs/{{ $blog->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
        <label for="exampleInputEmail1">タイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') == '' ? $blog->title : old('title') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">本文</label>
        <textarea class="form-control" name="content">{{ old('content') == '' ? $blog->content : old('content') }}</textarea>
    </div>
    <div class="form-group">
        <label>画像</label>
        <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
    </div>
    <button type="submit" class="btn btn-outline-primary">投稿</button>
</form>

<a href="/sample01/blogs/{{ $blog->id }}">戻る</a> | 
<a href="/sample01/blogs">ブログトップ</a>
@endsection
