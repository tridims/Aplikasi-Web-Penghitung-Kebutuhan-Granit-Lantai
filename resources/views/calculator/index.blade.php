<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Kalkulasi Kebutuhan Lantai Granit</h2>
      <p class="mb-4">Produk: {{$listing->name}}</p>
    </header>

    <form method="POST" action="/calculator/{{$listing->id}}" enctype="multipart/form-data">
      @csrf
      @method('POST')

      <div class="mb-6">
        <label for="length" class="inline-block text-lg mb-2">Panjang Ruang (Meter)</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="length" />

        @error('length')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="width" class="inline-block text-lg mb-2">Lebar Ruang (Meter)</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="width" />

        @error('width')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Calculate
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>