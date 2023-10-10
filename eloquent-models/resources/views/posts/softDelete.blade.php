<h1>show all soft delete posts</h1>
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
                <a href="{{route('posts.restore',$post->id)}}">Restore</a>
                <form action="{{route('posts.delete',$post->id)}}" method="get">
                    @csrf
                    <button type="submit">force Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
