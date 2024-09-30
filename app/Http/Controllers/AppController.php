<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use Illuminate\Support\Facades\Storage;

class AppController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|string|max:255',
            'pic_id' => 'required|string',
            'status' => 'required|string',
            'network_area' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails');
        }

        App::create([
            'title' => $request->title,
            'thumbnail' => $path,
            'pic_id' => $request->pic_id,
            'status' => $request->status,
            'network_area' => $request->network_area,
            'description' => $request->description,
        ]);

        return redirect()->route('apps')->with('success', 'Data updated successfully.');
    }

    public function index()
    {
        $apps = App::all();

        return view('apps', ['apps' => $apps]);
    }

    public function edit($id)
    {
        $app = App::findOrFail($id);

        return view('change', ['app' => $app]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:png,jpg,jpeg|max:2048',
            'title' => 'required|string|max:255',
            'pic_id' => 'required|string',
            'status' => 'required|string',
            'network_area' => 'required|string',
            'description' => 'required|string',
        ]);

        $app = App::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails');
            $app->thumbnail = $path;
        }

        $app->title = $request->title;
        $app->pic_id = $request->pic_id;
        $app->status = $request->status;
        $app->network_area = $request->network_area;
        $app->description = $request->description;

        $app->save();

        return redirect()->route('apps')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        // Temukan item yang ingin dihapus berdasarkan ID
        $app = App::findOrFail($id);

        // Hapus item dari database
        $app->delete();

        // Redirect setelah penghapusan berhasil
        return redirect()->route('apps')->with('success', 'Item deleted successfully.');
    }
}
