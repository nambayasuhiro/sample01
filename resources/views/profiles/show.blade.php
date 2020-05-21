@if (session('message'))
        {{ session('message') }}
    @endif

    {{ $profile->title }}
    {{ $profile->content }}

    <a href="/profiles/{{ $profile->id }}/edit">Edit</a>