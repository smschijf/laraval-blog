@extends ('admin.layout')

<?php
$singleton = App\Http\Controllers\Settings::getInstance();

$data = $singleton->getData();
?>

@section('title')
<title>Admin Page</title>
@endsection

@section('content')
<form action="update" method="POST" required>
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?= $data[1]; ?>">
        <br><hr>
        <label for="header_title">Header Title:</label>
        <input type="text" name="header_title" id="header_title" value="<?= $data[2]; ?>">
        <br>
        <label for="header_subtitle">Header Subtitle:</label>
        <input type="text" name="header_subtitle" id="header_subtitle" value="<?= $data[4]; ?>">
        <br>
        <label for="header_author">Header Author:</label>
        <input type="text" name="header_author" id="header_author" value="<?= $data[3]; ?>">
        <br>
        <label for="footer_title">Footer Title:</label>
        <input type="text" name="footer_title" id="footer_title" value="<?= $data[5]; ?>">
        <br>
        <label for="footer_subtitle">Footer Subtitle:</label>
        <input type="text" name="footer_subtitle" id="footer_subtitle" value="<?= $data[6]; ?>">
        <br>
    </div>
    <br><hr><br>
    <button type="submit">Apply Changes</button>
</form>

@endsection