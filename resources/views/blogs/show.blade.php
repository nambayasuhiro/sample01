@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card">
        <div class="card-body">
    
            <h5 class="card-title">{{ $blog->title }}</h5>
            <p class="card-text">{{ $blog->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">詳細</button>
                <a href="/sample01/blogs/{{ $blog->id }}/edit" class="btn btn-outline-primary">編集</a>
                <form action="/sample01/blogs/{{ $blog->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">削除</button>
                </form>
            </div>
        </div>
    </div>

    <a href="/sample01/blogs/{{ $blog->id }}/edit">編集</a> | 
    <a href="/sample01/blogs">戻る</a>
    
@endsection
