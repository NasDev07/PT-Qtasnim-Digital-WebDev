<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Exception;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBarang = DataBarang::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('dataBarang'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    try {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|integer',
            'jumlah_terjual' => 'required|integer',
            'tanggal_transaksi' => 'required|date', 
            'jenis_barang' => 'required|string|max:255',
        ]);

        // Untuk mendukung 'jenis_barang_lainnya'
        // if ($request->jenis_barang === 'Lainnya') {
        //     $validatedData['jenis_barang'] = $request->jenis_barang_lainnya;
        // }

        DataBarang::create($validatedData);

        return redirect()->route('databarang.index')->with(['success' => 'Data berhasil dibuat']);
    } catch (Exception $e) {
        return redirect()->route('databarang.index')->with(['failed' => 'Ada kesalahan sistem. Error: ' . $e->getMessage()]);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataBarang = DataBarang::findOrFail($id);
        return view('posts.edit', [
            'dataBarang' => $dataBarang,                    
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'nama_barang' => 'required',
                'stok' => 'required',
                'jumlah_terjual' => 'required',                  
                'tanggal_transaksi' => 'required',                  
                'jenis_barang' => 'required',                  
            ]); 

            $dataBarang = DataBarang::findOrFail($id);            

            $dataBarang->update($validatedData);

            return redirect()->route('databarang.index')->with(['success' => 'Update successfully']);
        } catch (Exception $e) {
            return redirect()->route('databarang.index')->with(['failed' => 'Ada kesalahan system. error :' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataBarang = DataBarang::findOrFail($id);
        if ($dataBarang) {
            $dataBarang->delete();
            return redirect()->back()->with(['success' => 'deleted successfully']);
        } else {
            return redirect()->back()->with(['failed' => 'Ada kesalahan system']);
        }
    }
}
