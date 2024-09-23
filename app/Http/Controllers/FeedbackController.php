<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Prikaz svih feedbackova
    public function index()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('feedbacks.index', compact('feedbacks'));
    }

    // Prikaz forme za kreiranje feedbacka
    public function create()
    {
        $users = User::all();
        return view('feedbacks.create', compact('users'));
    }

    // Spremanje novog feedbacka
    public function store(Request $request)
    {
        $request->validate([
            'USER_ID' => 'required',
            'COMMENT' => 'required',
        ]);

        Feedback::create($request->all());

        return redirect()->route('feedbacks.index')->with('success', 'Feedback je uspješno dodan.');
    }

    // Prikaz forme za uređivanje feedbacka
    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        $users = User::all();
        return view('feedbacks.edit', compact('feedback', 'users'));
    }

    // Ažuriranje feedbacka
    public function update(Request $request, $id)
    {
        $request->validate([
            'USER_ID' => 'required',
            'COMMENT' => 'required',
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update($request->all());

        return redirect()->route('feedbacks.index')->with('success', 'Feedback je uspješno ažuriran.');
    }

    // Brisanje feedbacka
    public function destroy($id)
    {
        Feedback::findOrFail($id)->delete();
        return redirect()->route('feedbacks.index')->with('success', 'Feedback je uspješno obrisan.');
    }
}
