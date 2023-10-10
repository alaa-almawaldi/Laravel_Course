<html>
<head>
    <title> get posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<a class="btn btn-danger" href="{{route('posts.delete.all')}}" role="button">Delete All</a><br><br>
<a class="btn btn-danger" href="{{route('posts.delete.all.truncate')}}" role="button">Delete All TrunCate</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">tilte</th>
        <th scope="col">body</th>
        <th scope="col">process</th>
    </thead>
    <tbody>
    @foreach($posts as $var)
    <tr>
        <th scope="row">{{$var->id}}</th>
        <td>{{$var->title}}</td>
        <td>{{$var->body}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('post.edit',$var->id)}}" role="button">edit</a>
            <a class="btn btn-danger" href="{{route('post.delete',$var->id)}}" role="button">delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>


