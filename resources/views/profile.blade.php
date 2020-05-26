@extends('layouts.layouts')

@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif
    


@foreach($profiles as $profile)

<div class="card">
        <div class="card-body">
            <p class="card-integer">{{ $profile->id }}</p>
            <p class="card-varchara">{{ $profile->name }}</p>
            <p class="card-varchara">{{ $profile->explanation }}</p>
            <p class="card-text">{{ $profile->about_me }}</p>
            <p class="card-varchara">{{ $profile->my_skils }}</p>
                <p class="card-text samneil"><img class="samneil" src="{{ asset('public/storage/') }}/{{ $profile->id }}/{{ $profile->image }}"></p>
                <div class="d-flex" style="height: 36.4px;">
                <a href="/sample01/profiles/{{ $profile->id }}" class="btn btn-outline-primary">詳細</a>
                    <a href="/sample01/profiles/{{ $profile->id }}/edit" class="btn btn-outline-primary">編集</a>
                    <form action="/sample01/profiles/{{ $profile->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-outline-danger">削除</button>
                    </form>
                </div>
            </div>
        </div>
@endforeach

<a href="/sample01/profiles/create">新規作成</a> 

@endsection


　