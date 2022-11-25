<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        // $data = $request->validate();
        Contact::create($request->all());
        return redirect()->route('contact');
    }

    public function getContact($id)
    {
        dd($id);
    }
}
