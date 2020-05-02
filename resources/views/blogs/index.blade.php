
@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

<h1>Blog</h1>

@foreach($blogs as $blog)


<div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->content }}</p>

                <div class="d-flex" style="height: 36.4px;">
                <a href="/blogs/{{ $blog->id }}" class="btn btn-outline-primary">Show</a>
                    <a href="/blogs/{{ $blog->id }}/edit" class="btn btn-outline-primary">Edit</a>
                    <form action="/blogs/{{ $blog->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
@endforeach

<a href="/blogs/create">New Blog</a> 

@endsection
