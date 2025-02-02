<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Newspost;
class News extends Controller
{
    //

    
    public function indexx()
    {
        $cars = Newspost::all();

        return view('electro.index', compact('cars'));
    }
    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $car = new ([
            'make' => $request->get('make'),
            'model' => $request->get('model'),
            'year' => $request->get('year'),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($imageName, file_get_contents($image));
            $car->image = $imageName;
        }

        $car->save();

        return redirect('/cars')->with('success', 'Car saved successfully!');
    }

    public function edit($id)
    {
        $car = Newspost::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $car = Newspost::findOrFail($id);
        $car->make = $request->get('make');
        $car->model = $request->get('model');
        $car->year = $request->get('year');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put($imageName, file_get_contents($image));
            $car->image = $imageName;
        }

        $car->save();

        return redirect('/cars')->with('success', 'Car updated successfully!');
    }

    public function destroy($id)
    {
        $car = Newspost::findOrFail($id);
        if ($car->image) {
            Storage::disk('public')->delete($car->image);
        }
        $car->delete();
        return redirect('/cars')->with('success', 'Car deleted successfully!');
    }

}
