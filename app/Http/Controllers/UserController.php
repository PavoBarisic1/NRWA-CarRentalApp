<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display a listing of the users
    public function index()
    {
        $users = User::all(); // Get all users
        return view('users.index', compact('users')); // Return the index view with users data
    }
   

    // Show the form for creating a new user
    public function create()
    {
        // Return a view for creating a user
        return view('users.create');
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'FNAME' => 'required|string|max:255',
            'LNAME' => 'required|string|max:255',
            'LIC_NUM' => 'required|string|max:255',
            'EMAIL' => 'required|string|email|max:255|unique:users',
            'PHONE_NUMBER' => 'required|string|max:20',
            'PASSWORD' => 'required|string|min:8',
            'GENDER' => 'required|string|max:10',
        ]);

        // Create a new user
        User::create($validated);

        // Redirect to the user listing with success message
        return redirect()->route('users.index')->with('success', 'Korisnik uspješno dodan');
    }

    // Display the specified user
    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            return view('users.show', compact('user'));
        } else {
            return redirect()->route('users.index')->with('error', 'Korisnik nije pronađen');
        }
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    
    

    // Update the specified user in the database
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id); // Koristi findOrFail da automatski baci grešku ako ne pronađe korisnika
    
        // Validate and update the user
        $validated = $request->validate([
            'FNAME' => 'sometimes|required|string|max:255',
            'LNAME' => 'sometimes|required|string|max:255',
            'LIC_NUM' => 'sometimes|required|string|max:255',
            'EMAIL' => 'sometimes|required|string|email|max:255|unique:users,EMAIL,' . $id . ',USER_ID', // Ovdje koristi $id
            'PHONE_NUMBER' => 'sometimes|required|string|max:20',
            'PASSWORD' => 'sometimes|required|string|min:8',
            'GENDER' => 'sometimes|required|string|max:10',
        ]);
    
        $user->update($validated);
    
        // Redirect back with success message
        return redirect()->route('users.index')->with('success', 'Korisnik uspješno ažuriran');
    }
    

    // Remove the specified user from the database
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'Korisnik uspješno obrisan');
        } else {
            return redirect()->route('users.index')->with('error', 'Korisnik nije pronađen');
        }
    }
}
