<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showFormPesan()
    {
        $menuItems = [
            ['id' => 'menu1', 'name' => 'Menu 1', 'harga'
            => 12000],
            ['id' => 'menu2', 'name' => 'Menu 2', 'harga'
            => 15000],
            ['id' => 'menu3', 'name' => 'Menu 3', 'harga'
            => 13000],
            ['id' => 'menu4', 'name' => 'Menu 4', 'harga'
            => 10000],
        ];
        return view('pesan', compact('menuItems'));
    }
    public function submitOrder(Request $request)
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
