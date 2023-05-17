<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    public function index()
    {
        $data['kategori'] = kategori::all();
        return view('kategori.index', $data);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'namakategori' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10'
        ]);

        if ($request->file('img')) {
            $validasi['img'] = $request->file('img')->store('gambar');
        }

        kategori::create($validasi);
        return redirect('/kategori');
            // ->with('success', 'Product created successfully.');
    }

    public function action(Request $request, $id)
    {
        $request->validate([
            'namakategori' => 'required',
            'img' => [File::types(['jpg', 'jpeg', 'png', 'gif'])->max(2 * 1024)],
        ]);

        $data = kategori::find($id);
        $data->namakategori = $request->namakategori;
        if ($request->file('img')) {
            Storage::delete($data->img);
            $data->img = Storage::putFile('gambaar', $request->file('img'));
        }
        $data->save();
        return redirect('/kategori');
    }

    public function destroy($id)
    {
        $data = kategori::find($id);
        if ($data->img) {
            Storage::delete($data->img);
        }
        kategori::destroy($id);
        return redirect('/kategori');
    }
}
