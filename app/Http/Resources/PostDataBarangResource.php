<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostDataBarangResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_barang' => $this->nama_barang,
            'stok' => $this->stok,
            'jumlah_terjual' => $this->jumlah_terjual,            
            'tanggal_transaksi' => optional($this->tanggal_transaksi)->format('d-m-Y'),
            'jenis_barang' => $this->jenis_barang,
        ];
        
    }
}