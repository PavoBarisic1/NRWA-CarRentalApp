<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Booking;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('booking')->get(); // Dohvati sve payment-ove zajedno sa booking-ovima
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $bookings = Booking::all(); // Trebaju ti booking-ovi za povezivanje payment-a
        return view('payments.create', compact('bookings'));
    }

    public function store(Request $request)
{
    // Check if a payment already exists for the selected booking
    $existingPayment = Payment::where('BOOK_ID', $request->BOOK_ID)->first();
    
    if ($existingPayment) {
        return redirect()->back()->withErrors(['BOOK_ID' => 'Plaćanje za ovu rezervaciju već postoji.']);
    }

    // Validate input
    $validated = $request->validate([
        'BOOK_ID' => 'required|exists:booking,BOOK_ID',
        'CARD_NO' => 'required|string|max:16',
        'EXP_DATE' => 'required|string',
        'CVV' => 'required|string|max:4',
        'PRICE' => 'required|numeric',
    ]);

    // Store payment
    Payment::create($validated);

    return redirect()->route('payments.index')->with('success', 'Plaćanje uspješno dodano');
}


    public function edit($id)
    {
        $payment = Payment::find($id);
        $bookings = Booking::all();
        return view('payments.edit', compact('payment', 'bookings'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'BOOK_ID' => 'required|unique:payment,BOOK_ID,' . $id . ',PAY_ID', // Ignoriše trenutni ID prilikom provjere jedinstvenosti
            'CARD_NO' => 'required',
            'EXP_DATE' => 'required',
            'CVV' => 'required',
            'PRICE' => 'required|numeric',
        ]);

        $payment = Payment::find($id);
        $payment->update($request->all());

        return redirect()->route('payments.index')->with('success', 'Plaćanje uspješno ažurirano.');
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();

        return redirect()->route('payments.index')->with('success', 'Plaćanje uspješno obrisano.');
    }
}
