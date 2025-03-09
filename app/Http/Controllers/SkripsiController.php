<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    /**
     * Menampilkan semua data skripsi.
     */
    public function index()
    {
        $skripsi = Skripsi::all();

        if ($skripsi->isEmpty()) {
            return response()->json(['message' => 'Tidak ada data skripsi'], 404);
        }

        return response()->json($skripsi, 200);
    }

    /**
     * Menyimpan data skripsi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim' => 'required|unique:skripsis|max:15',
            'judul' => 'required',
            'metode' => 'required',
            'dosen_pembimbing' => 'required',
        ]);

        try {
            $skripsi = Skripsi::create($request->all());
            return response()->json($skripsi, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menyimpan data', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Menampilkan data skripsi berdasarkan ID.
     */
    public function show(string $id)
    {
        $skripsi = Skripsi::find($id);

        if (!$skripsi) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($skripsi, 200);
    }

    /**
     * Mengedit data skripsi berdasarkan ID.
     */
    public function edit(string $id)
    {
        $skripsi = Skripsi::find($id);

        if (!$skripsi) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($skripsi, 200);
    }

    /**
     * Memperbarui data skripsi berdasarkan ID.
     */
    public function update(Request $request, string $id)
    {
        $skripsi = Skripsi::find($id);

        if (!$skripsi) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim' => 'required|max:15|unique:skripsis,nim,'.$id,
            'judul' => 'required',
            'metode' => 'required',
            'dosen_pembimbing' => 'required',
        ]);

        try {
            $skripsi->update($request->all());
            return response()->json($skripsi, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal memperbarui data', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Menghapus data skripsi berdasarkan ID.
     */
    public function destroy(string $id)
    {
        $skripsi = Skripsi::find($id);

        if (!$skripsi) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        try {
            $skripsi->delete();
            return response()->json(['message' => 'Data Skripsi Berhasil Dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menghapus data', 'error' => $e->getMessage()], 500);
        }
    }
}
