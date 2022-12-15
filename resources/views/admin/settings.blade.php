@extends ('admin.layout')

@section('title')
<title>Admin Page</title>
@endsection

@section('content')
<form action="update" method="POST" required>
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Laravel-Blog">
    </div>
    <br><hr><br>
    <button type="submit">Apply Changes</button>
</form>

@endsection