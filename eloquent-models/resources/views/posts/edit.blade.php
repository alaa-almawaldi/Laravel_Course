Edit post
<form action="{{route('posts.update',$post->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="title" value="{{$post->title}}"><br><br>
    <input type="text" name="body" value="{{$post->body}}"><br><br>
    <button type="submit">submit</button>
</form>
