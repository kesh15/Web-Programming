<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showFormPesan()
    {
        return view('formData');
    }
    public function submitData(Request $request)
    {
        $data = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'telp' => $request->input('telp'),
        ];
        return view('dashboardAdmin', compact(
            'data',
        ));
    }
}
