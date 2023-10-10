<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <table class="table" >
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">path</th>
        </tr>
        </thead>
        <tbody>
        @foreach($images as $image)
            <tr>
                <th scope="row">{{$image->id}}</th>
                <td><img src="{{asset('imgs/'.$image->path)}}" width="100px" height="100px"></td>
            </tr>
        @endforeach
        </tbody>
</table>

</body>
</html>
