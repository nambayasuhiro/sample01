<h1>Bs</h1>

@foreach($blogs as $blog)
    <a href="/blogs/{{ $blog->id }}">{{ $blog->title }}</a>
    <a href="/blogs/{{ $blog->id }}/edit">Edit</a>
@endforeach

<a href="/blogs/create">New Blog</a> 