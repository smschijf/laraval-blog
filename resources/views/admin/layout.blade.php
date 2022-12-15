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
  @yield('title')
</head>

<body style="font-family: Open Sans, sans-serif">
  <section class="px-6 py-8 overflow-hidden">
    <nav class="md:flex md:justify-between md:items-center ml-64">
      <div>
        <a href="/">
          <img src="/assets/img/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
      </div>

      <div class="mt-8 md:mt-0">
        <a href="/" class="text-xs font-bold uppercase">Home Page</a>

        <a href="#"
          class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Subscribe
          for Updates</a>
      </div>
    </nav>

      <div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
        <div class="text-gray-100 text-xl">
          <div class="p-2.5 mt-1 flex items-center">
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">Admin</h1>
          </div>
          <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>
        <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
          <i class="bi bi-search text-sm"></i>
          <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
        </div>
        <a href="/admin">
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-house-door-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
          </div>
        </a>
        <a href="/admin/posts">
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <i class="bi bi-file-text-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Posts</span>
          </div>
        </a>
        <div class="my-4 bg-gray-600 h-[1px]"></div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          onclick="dropdown()">
          <i class="bi bi-stickies-fill"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Pages</span>
            <span class="text-sm rotate-180" id="arrow">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold" id="submenu">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Home
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Post
          </h1>
        </div>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
          <i class="bi bi-box-arrow-in-right"></i>
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
        </div>
      </div>
      <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6 ml-64">

      @yield('content')
    </main>
  </section>
</body>

</html>