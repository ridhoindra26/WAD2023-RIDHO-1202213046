<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\showroom_mobil;

class ShowroomController extends Controller
{
    public function create() {
        return view('showroom.create');
    }

    public function store(Request $request) {
        
        // echo var_dump($data);
        // Create a new Post instance with the validated data
        // $post = new showroom_mobil([
        //     'nama_mobil' => $data['nama_mobil'],
        //     'brand_mobil' => $data['brand_mobil'],
        //     'warna_mobil' => $data['warna_mobil'],
        //     'tipe_mobil' => $data['tipe_mobil'],
        //     'harga_mobil' => $data['hargad_mobil'],
        // ]);

        showroom_mobil::create([
                'nama_mobil' => $request->name,
                'brand_mobil' => $request->brand,
                'warna_mobil' => $request->warna,
                'tipe_mobil' => $request->tipe,
                'harga_mobil' => $request->harga
            ]);
        return redirect()->route('showroom.index');
    }

    public function index() {
        $showroom = showroom_mobil::all();
        return view('showroom.index', compact('showroom'));
    }
}
