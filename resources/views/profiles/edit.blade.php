@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

<h1>Editing Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/sample01/profiles/{{ $profile->id }}">
        {{ csrf_field() }}
        <div class="form-group">
        <label for="exampleInputEmail1">名前</label>
        <input type="text" class="form-control"  name="name" value="{{old('name')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">生年月日</label>
        <input type="text" class="form-control" name="explanation" value="{{old('explanation')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">紹介</label>
        <textarea class="form-control" name="about_me">{{old('about_me')}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">PHP.laravel</label>
         <input type="number" class="form-control" name="php_laravel" value="{{old('php_laravel')}}">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">HTML.CSS</label>
         <input type="number" class="form-control"  name="html_css" value="{{old('html_css')}}">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">WIX</label>
         <input type="number" class="form-control" name="wix" value="{{old('wix')}}">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">マーケティング</label>
         <input type="number" class="form-control" name="marketing" value="{{old('marketing')}}">

    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/sample01/profiles/{{ $profile->id }}">Show</a> | 
<a href="/sample01/profiles">Back</a>

@endsection