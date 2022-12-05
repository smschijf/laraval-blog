@extends ('components.layout')

@section('pageTitle')
homepage
@endsection

@section('content')
hallo
@endsection

<body>
  @foreach ($posts as $post)
  <article>
    <h1>
      <a href="/posts/<?= $post->slug; ?>">
        <?= $post->title ?>
      </a>
    </h1>
    <div>
      <?= $post->excerpt ?>
    </div>
  </article>
  @endforeach
</body>