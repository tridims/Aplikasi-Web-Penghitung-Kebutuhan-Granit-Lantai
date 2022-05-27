<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />

        <h3 class="text-2xl mb-2">
          {{$listing->name}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$listing->length}} x {{$listing->width}} cm | {{$listing->amount}} pcs</div>

        <div class="text-lg my-4">
          <i class="fa-solid fa-tag"></i> Rp. {{number_format($listing->price, 0, ',', '.');}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
          <h3 class="text-3xl font-bold mb-4">Informasi</h3>
          <div class="text-lg space-y-6">
            Produk memiliki dimensi {{$listing->length}} x {{$listing->width}} cm dengan isi {{$listing->amount}} lantai per dus.

            <a href="{{$listing->website}}" target="_blank" class="block bg-black text-white py-2 mt-3 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
              Cek Toko</a>

            <a href="/calculator/{{$listing->id}}" class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-calculator"></i>
              Kalkulator Kebutuhan Granit</a>
          </div>
        </div>
      </div>
    </x-card>

    <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/granite-tiles/{{$listing->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/granite-tiles/{{$listing->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>
    </x-card>
  </div>
</x-layout>