@extends ('admin.layout')

@section('title')
<title>Admin Page</title>
@endsection

@section ('content')
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-50">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Id
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Title
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Excerpt
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Updated At
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
            @foreach ($posts as $post)
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $post->id }}</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $post->title }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $post->excerpt }}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{ $post->updated_at }}
              </td>
            </tr class="bg-white border-b">
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection