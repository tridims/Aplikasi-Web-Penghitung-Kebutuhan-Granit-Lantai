<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6" src="{{$listing->image ? asset('storage/' . $listing->image) : asset('/images/no-image.png')}}" alt="" />

        <h3 class="text-2xl mb-2">
          {{$listing->name}}
        </h3>
        <div class="text-xl font-bold mb-4">{{$listing->length}} x {{$listing->width}} cm | {{$listing->amount}} pcs</div>

        <div class="text-lg my-4">
          <i class="fa-solid fa-tag"></i> Rp. {{number_format($listing->price, 0, ',', '.');}}
        </div>

        <div class="border border-gray-200 w-full mb-6"></div>

        <div>
          <h3 class="text-3xl font-bold mb-4">Hasil Kalkulasi</h3>
          <div class="text-lg space-y-2">
            <div>
              <i class="fa-solid fa-house"></i> Luas Rumah {{$luas}} ㎡ ({{$panjang_ruangan}} x {{$lebar_ruangan}} Meter)
            </div>
            <div><i class="fa-solid fa-box"></i> Jumlah Granit Yang Dibutuhkan {{$jumlah_granit}} buah</div>
            <div><i class="fa-solid fa-box"></i> Jumlah Pembelian Yang Dibutuhkan {{$jumlah_kardus}} dus</div>
            <div><i class="fa-solid fa-tag"></i>
              Total Biaya Rp. {{number_format($total_harga, 0, ',', '.');}}
            </div>
          </div>
        </div>
      </div>
    </x-card>

    <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/calculator/{{$listing->id}}">
        <i class="fa-solid fa-pencil"></i> Hitung Lagi
      </a>
    </x-card>
  </div>
</x-layout>