<x-layout></x-layout>
<body>
<x-navbar></x-navbar>
  <x-header>Form Input</x-header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  
        <x-forsearch></x-forsearch>
          @foreach ($posts as $post)
          {{ $post->title }} 
          @endforeach
        {{-- <ul>
          @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
          @endforeach
          </ul> --}}
      </div>
    </main>
  </div>
  
    </body>
</html>
