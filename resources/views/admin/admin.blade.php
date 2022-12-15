@extends ('components.layout')

@section('title')
<title>Admin</title>
@endsection

@section('content')

<p>Admin Panel</p>
<hr><br>

<a href="{{ route('admin.edit') }}">Edit Page</a><br>

<br><hr>
@endsection