<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SlotController extends Controller
{
    public function index(){
        $slots = Slot::all();
        return view('slots.index', compact('slots'));
    }

    public function create(){
        return view('slots.create');
    }

    public function store(Request $request){
        $request->validate([
            'dateTime' => 'required|date',
            'slotUsed' => 'required|integer',
        ]);

        Slot::create([
            'dateTime' => $request->dateTime,
            'slotUsed' => $request->slotUsed,
        ]);

        return redirect()->route('slots.index')->with('sucess', 'Jadwal berhasil dibuat dan slot terisi');
    }

    public function show($id){
        $slot = Slot::findOrFail($id);
        return view('slots.show', compact('slot'));
    }

    public function edit($id){
        $slot = Slot::findOrFail($id);
        return view('slots.edit', compact('slot'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'dateTime' => 'required|date',
            'slotUsed' => 'required|integer',
        ]);

        $slot = Slot::findOrFail($id);
        $slot->update([
            'dateTime' => $request->dateTime,
            'slotUsed' => $request->slotUsed,
        ]);

        return redirect()->route('slots.index')->with('success', 'Jadwal berhasil diupdate');
    }

    public function destroy($id){
        $slot = Slot::findOrFail($id);
        $slot->delete();
        return redirect()->route('slots.index')->with('success', 'Jadwal berhasil dihapus');
    }
}
