<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Prikaz svih rezervacija
    public function index()
    {
        $bookings = Booking::with(['car', 'user'])->get();
        return view('bookings.index', compact('bookings'));
    }

    // Prikaz forme za kreiranje rezervacije
    public function create()
    {
        $cars = Car::all();
        $users = User::all();
        return view('bookings.create', compact('cars', 'users'));
    }

    // Spremanje nove rezervacije
    public function store(Request $request)
    {
        $request->validate([
            'CAR_ID' => 'required',
            'USER_ID' => 'required',
            'BOOK_PLACE' => 'required',
            'BOOK_DATE' => 'required|date',
            'DURATION' => 'required|integer',
            'PHONE_NUMBER' => 'required',
            'DESTINATION' => 'required',
            
            
            'BOOK_STATUS' => 'required',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success', 'Rezervacija je uspješno dodana.');
    }

    // Prikaz forme za uređivanje rezervacije
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $cars = Car::all();
        $users = User::all();
        return view('bookings.edit', compact('booking', 'cars', 'users'));
    }

    // Ažuriranje rezervacije
    public function update(Request $request, $id)
    {
        $request->validate([
            'CAR_ID' => 'required',
            'USER_ID' => 'required',
            'BOOK_PLACE' => 'required',
            'BOOK_DATE' => 'required|date',
            'DURATION' => 'required|integer',
            'PHONE_NUMBER' => 'required',
            'DESTINATION' => 'required',
            'RETURN_DATE' => 'required|date',
            
            'BOOK_STATUS' => 'required',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Rezervacija je uspješno ažurirana.');
    }

    // Brisanje rezervacije
    public function destroy($id)
    {
        Booking::findOrFail($id)->delete();
        return redirect()->route('bookings.index')->with('success', 'Rezervacija je uspješno obrisana.');
    }
}
