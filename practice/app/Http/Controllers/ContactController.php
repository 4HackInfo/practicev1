
<?php

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $req)
    {
        $validated = $req->validate([
            'name'  => 'required|string',
            'email' => 'required|email',
        ]);

        return back()->with('success', "Thanks, {$validated['name']}! Email received.");
    }
}
