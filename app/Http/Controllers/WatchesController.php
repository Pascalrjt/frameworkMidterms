<?php

namespace App\Http\Controllers;

use App\Models\Watches;
use Illuminate\Http\Request;

class WatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $watches = Watches::all();
        return view('watches.index', compact('watches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    public function create()
    {
        return view('watches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'brand' => 'required',
            'release' => 'required|numeric',
            'desc' => 'required|max:2048',
            'image' => 'image|file|max:2048',
            'price' => 'required|numeric'
        ],
        [
            'model.required' => 'model can\'t be empty!',
            'brand.required' => 'Brand can\'t be empty!',
            'release.required' => 'Release Date can\'t be empty!',
            'desc.required' => 'Description can\'t be empty!',
            'price.required' => 'Price can\'t be empty!'
        ]);

        $image = $request->file('image');
        if ($image) {
            $imageBase64 = base64_encode(file_get_contents($image));
        } else {
            $imageBase64 = null;
        }

        Animals::create([
            'model' => $request->model,
            'brand' => $request->brand,
            'release' => $request->release,
            'desc' => $request->desc,
            'image' => $imageBase64,
            'price' => $request->price
        ]);

        return redirect('/watches');
    }



    public function show($id)
    {
        $watches = Watches::findorfail($id);
        return view('watches.show', compact('watches'));
    }

    public function edit(Watch $watch)
    {
        return view('watch.edit', compact('watch', 'stores'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'model' => 'required',
            'brand' => 'required',
            'release' => 'required|numeric',
            'price' => 'required|numeric'
        ],
        [
            'model.required' => 'model can\'t be empty!',
            'brand.required' => 'Brand can\'t be empty!',
            'release.required' => 'Release Date can\'t be empty!',
            'price.required' => 'Price can\'t be empty!'
        ]);

        $watches = Watches::findorfail($id);

        $watch_data = [
            'model' => $request->model,
            'brand' => $request->brand,
            'release' => $request->release,
            'price' => $request->price
        ];

        $watches->update($watch_data);

        return view('watches.show', compact('watches'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $watches = Watches::findorfail($id);
        $watches->delete();

        return redirect('/watches');
    }

}
