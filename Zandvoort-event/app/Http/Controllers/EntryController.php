<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EntryController extends Controller
{
    // Store Entry Data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'numberplate' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();

        Entry::create($formFields);

        return redirect('/')->with('message', 'Registratie gelukt!');
    }
}
