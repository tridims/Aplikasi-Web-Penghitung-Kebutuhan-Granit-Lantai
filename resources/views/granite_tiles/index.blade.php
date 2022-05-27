<x-layout>
    @include('partials._hero')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($listings) == 0)

        @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
        @endforeach

        @else
        <p>Belum Ada Produk!</p>
        @endunless

    </div>

    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
</x-layout>