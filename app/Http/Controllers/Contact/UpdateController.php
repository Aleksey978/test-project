<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\UpdateRequest;
use App\Models\Contact;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Contact $contact)
    {
        $data = $request->validate();
        $contact ->update($data);
        return redirect()->route('contact_show', $contact->id);
    }
}
