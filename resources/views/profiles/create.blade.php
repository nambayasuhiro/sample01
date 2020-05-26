
@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>about_me</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/sample01/profiles">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">名前</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">生年月日</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">紹介</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">MY skills</label>
         <textarea class="form-control" name="content">{{old('content')}}</textarea>

    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/sample01/profiles">Back</a>

@endsection
