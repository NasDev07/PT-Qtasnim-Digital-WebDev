<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataBarangResource;
use App\Http\Resources\PostDataBarangResource;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataBarangApiController extends Controller
{
    public function index()
    {
        $dataBarang = DataBarang::orderBy('created_at', 'desc')->paginate(10);

        return response()->json([
            'message' => 'Data fetched successfully',
            'status' => 200,
            'data' => DataBarangResource::collection($dataBarang),
            'meta' => [
                'current_page' => $dataBarang->currentPage(),
                'per_page' => $dataBarang->perPage(),
                'total' => $dataBarang->total(),
                'last_page' => $dataBarang->lastPage(),
            ]
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|integer',
            'jumlah_terjual' => 'required|integer',
            'tanggal_transaksi' => 'required|date_format:Y-m-d',
            'jenis_barang' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'status' => 422,
                'errors' => $validator->errors(),
            ], 422);
        }

        $dataBarang = DataBarang::create($validator->validated());

        return response()->json([
            'message' => 'Data created successfully',
            'status' => 201,
            'data' => new DataBarangResource($dataBarang),
        ], 201);
    }


    public function show($id)
    {
        //
    }

    //  Tinggal Update dan Delete
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|integer',
            'jumlah_terjual' => 'required|integer',
            'tanggal_transaksi' => 'required|date',
            'jenis_barang' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'status' => 422,
                'errors' => $validator->errors(),
            ], 422);
        }

        $dataBarang = DataBarang::findOrFail($id);
        $dataBarang->update($validator->validated());

        return response()->json([
            'message' => 'Data updated successfully',
            'status' => 200,
            'data' => new DataBarangResource($dataBarang),
        ]);
    }

    public function destroy($id)
    {
        $dataBarang = DataBarang::findOrFail($id);
        $dataBarang->delete();

        return response()->json([
            'message' => 'Data deleted successfully',
            'status' => 200,
        ]);
    }
}
