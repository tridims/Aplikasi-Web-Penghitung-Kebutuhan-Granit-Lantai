<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Add a Granite Tile Product</h2>
      <p class="mb-4">Insert your favourite Granite Tiles data</p>
    </header>

    <form method="POST" action="/granite-tiles" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">Product Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="length" class="inline-block text-lg mb-2">Length in Centimeter</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="length" value="{{old('length')}}" />

        @error('length')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="width" class="inline-block text-lg mb-2">Width in Centimeter</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="width" value="{{old('width')}}" />

        @error('width')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="amount" class="inline-block text-lg mb-2">Jumlah Lantai Per Kardus</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="amount" value="{{old('amount')}}" />

        @error('amount')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="price" class="inline-block text-lg mb-2">
          Harga Per Kardus
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price" value="{{old('price')}}" />

        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">
          Website Pembelian
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{old('website')}}" />

        @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">
          Gambar Produk
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />

        @error('image')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Simpan Produk
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>