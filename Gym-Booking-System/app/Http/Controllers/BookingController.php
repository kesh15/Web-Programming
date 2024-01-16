<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create(){
        return view('bookings.create');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required|unique:bookings',
            'dateTime' => 'required|date',
            'duration' => 'required|integer',
        ]);

        $existingBookingCount = Booking::where('dateTime', $request->dateTime)->count();
        $availableSlot = config('app.max_slots') - $existingBookingCount;
        
        if ($availableSlot <= 0) return redirect()->back()->with('error', 'Maaf, semua slot untuk tanggal, jam tersebut sudah penuh');
        
        Booking::create([
            'username' => $request->username,
            'dateTime' => $request->dateTime,
            'duration' => $request->duration,
        ]);

        $slot = Slot::where('dateTime', $request->dateTime)->first();

        if($slot) $slot->increment('slotUsed');
        return redirect()->route('bookings.index')->with('success', 'Pemesanan berhasil dibuat!');
    }

    public function show($id){
        $booking = Booking::findOrFail($id);
        return view('bookings.show', compact('booking'));
    }

    public function edit($id){
        $booking = Booking::findOrFail($id);
        return view('bookings.edit', compact('booking'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'username' => 'required|unique:bookings,username,' . $id,
            'dateTime' => 'required|date',
            'duration' => 'required|integer',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update([
            'username' => $request->username,
            'dateTime' => $request->dateTime,
            'duration' => $request->duration,
        ]);

        return redirect()->route('bookings.index')->with('success', 'Pemesanan berhasil diperbarui!');
    }

    public function destroy($id){
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Pemesanan berhasil dihapus!');
    }
}
