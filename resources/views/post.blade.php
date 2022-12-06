@extends ('components.layout')

@section('content')
<article>
  <h1>{{ $post->title }}</h1>
  <p>{{ \Carbon\Carbon::parse($post->date)->format('d-m-Y') }}</p>
  <p>{!! $post->body !!}</p>
</article>
<a href="/">Go Back</a>
@endsection