<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();

        return view('admin_page.apps.customers.list', [
            'mahasiswa' => $data
        ]);
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'nama' => 'required',
                'nim' => 'required|unique:mahasiswas,nim',
                'prodi' => 'required',
                'noTelp' => 'required',
                'alamat' => 'required',
                'tgl_lahir' => 'required',
            ]);

            DB::beginTransaction();

            $mahasiswaData = [
                'nama' => $request->nama,
                'nim' => $request->nim,
                'prodi' => $request->prodi,
                'noTelp' => $request->noTelp,
                'alamat' => $request->alamat,
                'tgl_lahir' => $request->tgl_lahir,
                'created_at' => now(),
            ];

            DB::table('mahasiswas')->insert($mahasiswaData);

            DB::commit();
            
            $data = Mahasiswa::all();
            
            return response()->view('admin_page.apps.customers.list', [
                'mahasiswa' => $data
            ], Response::HTTP_OK);
        } catch (QueryException $ex) {
            DB::rollBack();

            if ($ex->errorInfo[1] == 1062) {
                return response()->view('admin_page.apps.customers.list', [
                    'mahasiswa' => $data
                ], Response::HTTP_CONFLICT);
            } 
            
            return response()->view('admin_page.apps.customers.list', [
                'mahasiswa' => $data
            ], Response::HTTP_INTERNAL_SERVER_ERROR);            
        }
    }
}
