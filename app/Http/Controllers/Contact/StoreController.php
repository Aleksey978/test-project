<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validate();
        Contact::create($data);
        return redirect()->route('contact');
    }
}
