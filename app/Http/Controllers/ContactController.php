<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    public function created()
    {
        $categories = Category::all();
        return view('contact.create', compact('categories'));
    }

    public function update(Contact $contact)
    {
        $data = request()->validate([
                'name' => '',
                'company' => '',
                'email' => '',
                'phone' => '',
                'category_id',
                'massage' => ''
//                'our_client' => ''
            ]
        );
        $contact ->update($data);
        return redirect()->route('contact_show', $contact->id);
    }
    public function delete () {
        $contact = Contact::find(6);
//        $contact->delete();

    }
    public function destroy (Contact $contact) {
        $contact->delete();
        return redirect()->route('contact');

    }

    public function store()
    {
        $data = request()->validate([
                'name' => '',
                'company' => '',
                'email' => '',
                'phone' => '',
                'massage' => '',
                'category_id'
//                'our_client' => ''
            ]
        );
        Contact::create($data);
        return redirect()->route('contact');
    }

    public function edit (Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }
}
