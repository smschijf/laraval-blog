<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/assets/css/app.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  @yield('title')
</head>

<body style="font-family: Open Sans, sans-serif">
  <section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
      <div>
        <a href="/">
          <img src="/assets/img/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
      </div>

      <div class="mt-8 md:mt-0">
        <a href="/" class="text-xs font-bold uppercase">Home Page</a>

        <a href="#" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Subscribe
          for Updates</a>
      </div>
    </nav>

    @yield('content')

  </section>
</body>

</html>