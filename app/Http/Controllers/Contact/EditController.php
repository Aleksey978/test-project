<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class EditController extends Controller
{
    public function __invoke(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }
}
