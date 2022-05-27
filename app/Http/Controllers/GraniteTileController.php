<?php

namespace App\Http\Controllers;

use App\Models\GraniteTile;
use Illuminate\Http\Request;

class GraniteTileController extends Controller
{
    // show all listings of granite tiles products
    public function index()
    {
        return view('granite_tiles.index', [
            'listings' => GraniteTile::latest()->paginate(6)
        ]);
    }

    // show single GraniteTile
    public function show(GraniteTile $graniteTile)
    {
        return view('granite_tiles.show', [
            'listing' => $graniteTile
        ]);
    }

    // show form to create new GraniteTile
    public function create()
    {
        return view('granite_tiles.create', []);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|string',
            'length' => 'required|numeric|min:1',
            'width' => 'required|numeric|min:1',
            'amount' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0',
            'website' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('product-images', 'public');
        }

        GraniteTile::create($formFields);

        return redirect('/')->with('message', 'Product has been added!');
    }

    public function edit(GraniteTile $graniteTile)
    {
        return view('granite_tiles.edit', [
            'listing' => $graniteTile
        ]);
    }

    public function update(Request $request, GraniteTile $graniteTile)
    {
        $formFields = $request->validate([
            'name' => 'required|string',
            'length' => 'required|numeric|min:1',
            'width' => 'required|numeric|min:1',
            'amount' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0',
            'website' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('product-images', 'public');
        }

        $graniteTile->update($formFields);

        return back()->with('message', 'Product has been updated!');
    }

    public function destroy(GraniteTile $graniteTile)
    {
        $graniteTile->delete();
        return redirect('/')->with('message', 'Product has been deleted!');
    }
}
