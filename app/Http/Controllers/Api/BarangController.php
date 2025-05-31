<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index()
    {
        return BarangModel::all();
    }

    public function show(BarangModel $barang)
    {
        return $barang; 
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori_id' => 'required',
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // handle image upload (jika ada)
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->store('public/images');
            $imageName = $image->hashName();
        }

        // create barang
        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'image' => $imageName,
        ]);

        return response()->json($barang, 201);
    }

    public function update(Request $request, BarangModel $barang)
    {
        $barang->update($request->all());
        return response()->json($barang);
    }

    public function destroy(BarangModel $barang)
    {
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
