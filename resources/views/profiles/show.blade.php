@extends('layouts, layouts')

@section('title', 'Simple Board')

@section('content')

@if (session('message'))
    {{ session('message') }}
@endif
<div class="card">
        <div class="card-body">

@foreach($profiles as $profile)
            <p class="card-title">{{ $profile->name }}</p>
            <p class="card-text">{{ $profile->explanation }}</p>
            <p class="card-text">{{ $profile->about_me }}</p>
            <p class="card-varchara">{{ $profile->php_laravel }}</p>
            <p class="card-varchara">{{ $profile->html_css }}</p>
            <p class="card-varchara">{{ $profile->wix }}</p>
            <p class="card-varchara">{{ $profile->marketing }}</p>



            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">Show</button>
                <a href="/sample01/profiles/{{ $profile->id }}/edit" class="btn btn-outline-primary">Edit</a>
                <form action="/sample01/profiles/{{ $profile->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <a href="/sample01/profiles/{{ $profile->id }}/edit">Edit</a>
    <a href="/sample01/profiles">Back</a>

    @endsection 
