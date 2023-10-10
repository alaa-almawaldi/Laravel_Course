<form action="{{route('photo.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo">
    <button type="submit">submit</button>
</form>
