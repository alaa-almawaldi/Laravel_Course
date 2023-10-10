<h1>show all posts</h1>
<table>
    <th>#</th>
    <th>id</th>
    <th>title</th>
    <th>body</th>
    @foreach($post as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
                <a href="{{route('posts.edit',$post->id)}}">Edit</a>
                <form action="{{route('posts.destroy',$post->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Soft Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
