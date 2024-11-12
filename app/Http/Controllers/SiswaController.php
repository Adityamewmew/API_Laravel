<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class SiswaController extends Controller
{
    public function index()
    {
        try {
            return Siswa::all();
        } catch (\Exception $e) {
            Log::error('Error : ' . $e->getMessage());
            return response()->json(['error' => 'Gagal mengambil data siswa.'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            // Validasi data
            $validatedData = $request->validate([
                'nama' => 'required|regex:/^[a-zA-Z\s]+$/',
                'kelas' => 'required|regex:/^XII\sIPA\s\d+$/',
                'umur' => 'required|integer|between:6,18',
            ]);

            $siswa = Siswa::create($validatedData);
            return response()->json($siswa, 201);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'Validasi gagal.',
                'messages' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            Log::error('Error : ' . $e->getMessage());
            return response()->json(['error' => 'Gagal menyimpan data siswa.'], 500);
        }
    }

    public function show($id)
    {
        try {
            return Siswa::findOrFail($id);
        } catch (\Exception $e) {
            Log::error('Error  ' . $id . ': ' . $e->getMessage()); 
            return response()->json(['error' => 'Siswa tidak ditemukan.'], 404);
        }
    }

    public function update(Request $request, $id)
{
    try {
        $siswa = Siswa::findOrFail($id);
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|regex:/^[a-zA-Z\s]+$/',
            'kelas' => 'sometimes|required|regex:/^XII\sIPA\s\d+$/',
            'umur' => 'sometimes|required|integer|between:6,18',
        ]);

        $siswa->update($validatedData);
        return response()->json($siswa);
    } catch (ValidationException $e) {
        return response()->json([
            'error' => 'Validasi gagal.',
            'messages' => $e->errors(),
        ], 422);
    } catch (\Exception $e) {
        Log::error('Error  ' . $id . ': ' . $e->getMessage());
        return response()->json(['error' => 'Gagal memperbarui data siswa.'], 500);
    }
}


    public function destroy($id)
    {
        try {
            $siswa = Siswa::findOrFail($id);
            $siswa->delete();
            return response()->json(['success' => 'Data siswa berhasil dihapus.'], 200);
        } catch (\Exception $e) {
            Log::error('Error  ' . $id . ': ' . $e->getMessage()); 
            return response()->json(['error' => 'Gagal menghapus data siswa.'], 500);
        }
    }
}