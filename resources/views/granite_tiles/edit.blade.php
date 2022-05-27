<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit Product</h2>
      <p class="mb-4">Edit: {{$listing->name}}</p>
    </header>

    <form method="POST" action="/granite-tiles/{{$listing->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">Product Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{$listing->name}}" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="length" class="inline-block text-lg mb-2">Length (Centimeter)</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="length" placeholder="Example: Senior Laravel Developer" value="{{$listing->length}}" />

        @error('length')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="width" class="inline-block text-lg mb-2">Width (Centimeter)</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="width" placeholder="Example: Remote, Boston MA, etc" value="{{$listing->width}}" />

        @error('width')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="amount" class="inline-block text-lg mb-2">
          Jumlah Lantai Per Kardus
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="amount" value="{{$listing->amount}}" />

        @error('amount')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="price" class="inline-block text-lg mb-2">
          Harga Per Kardus
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price" placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->price}}" />

        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">
          Website Pembelian
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{$listing->website}}" />

        @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">
          Gambar Produk
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />

        <img class="w-48 mr-6 mb-6" src="{{$listing->image ? asset('storage/' . $listing->image) : asset('/images/no-image.png')}}" alt="" />

        @error('image')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Update Produk
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>