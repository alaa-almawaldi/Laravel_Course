<h1>Create New post:</h1>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter title"><br>
    <input type="text" name="body" placeholder="Enter body"><br>
    <button type="submit">submit</button>
</form>
