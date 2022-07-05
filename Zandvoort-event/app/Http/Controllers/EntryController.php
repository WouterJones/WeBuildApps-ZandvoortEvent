<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationSuccesMail;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

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

        // Sending confirmation mail after storing data
        $email = $request->get('email');

        $data = ([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'numberplate' => $request->get('numberplate')
        ]);

        Mail::to($email)->send(new RegistrationSuccesMail($data));

        // flash message showing at top of screen
        return redirect('/')->with('message', 'Registratie gelukt!');
    }
}
