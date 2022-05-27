@props(['listing'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block" src="{{$listing->image ? asset('storage/' . $listing->image) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/granite-tiles/{{$listing->id}}">{{$listing->name}}</a>
      </h3>
      <div class="text-xl font-bold mb-4">{{$listing->length}} x {{$listing->width}} cm | {{$listing->amount}} pcs</div>
      <div class="text-lg mt-4">
        <i class="fa-solid fa-tag"></i> Rp. {{number_format($listing->price, 0, ',', '.');}}
      </div>
    </div>
  </div>
</x-card>