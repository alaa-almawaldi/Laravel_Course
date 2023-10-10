create new post
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter title"><br><br>
    <input type="text" name="body" placeholder="Enter title"><br><br>
    <button type="submit">submit</button>
</form>
