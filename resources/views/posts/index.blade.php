<x-layout></x-layout>
<body>
<x-navbar></x-navbar>
  <x-header>Form Input</x-header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{-- <ul>
        @foreach ($posts as $post)
          <li>{{ $post->title }}</li>
        @endforeach
        </ul> --}}
        <x-forsearch></x-forsearch>
      </div>
    </main>
  </div>
  
    </body>
</html>
