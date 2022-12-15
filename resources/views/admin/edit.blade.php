@extends ('components.layout')

@section('title')
<title>Admin</title>
@endsection

@section('content')
<a href="{{ route('admin') }}">Back</a>
<form action="update" method="POST" required>
    @csrf
    <hr><br>
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Laravel-Blog">
    </div>
    <br><hr>
    <button type="submit">Apply Changes</button>
</form>

@endsection