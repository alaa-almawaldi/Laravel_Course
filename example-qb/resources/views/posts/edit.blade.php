<h1>edit post</h1>
<form action="{{route('post.update',$post->id)}}" method="post">
    @csrf {{-- encryption data--}}
    @method('PUT')
    <input type="text" name="title" value="{{$post->title}}"><br><br>
    <input type="text" name="body" value="{{$post->body}}"><br><br>
    <button type="submit">submit</button>
</form>
