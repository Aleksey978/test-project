<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class DestroyController extends Controller
{
    public function __invoke(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact');
    }
}
