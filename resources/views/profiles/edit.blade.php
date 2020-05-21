<form method="POST" action="/profile/{{ $profile->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{ $profile->title }}">
        <input type="text" name="content" value="{{ $profile->content }}">
        <input type="submit">
    </form> 