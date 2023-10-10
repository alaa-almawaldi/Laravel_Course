<h1>create new post:</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter title" value="{{old('title')}}" class="@error('title') is-invalid @enderror"><br><br>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="text" name="body" placeholder="Enter body" value="{{old('body')}}" class="@error('body') is-invalid @enderror"><br><br>
    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">submit</button>
</form>
