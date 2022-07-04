<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EntryController extends Controller
{
    // Get All Entrys for Counter
    public function counter() {
        
    }

    // show all listing
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6) // Usage of the imported database from above.
            // When you put ::latest it wil automaticly filter on latest.
            // Instead of get after ...(request(['tag', 'search']))-> you can use paginate that will automaticly sets up pagination. between the brackets fill in the number of items shown. 
            // Instead of paginate you can use simplepaginate that wil give you only the prev and next buttons.
            // -> styling and implementation is done in: index.blade.php
        ]);
    }

    // Store Entry Data
    public function store(Request $request)
    {
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
