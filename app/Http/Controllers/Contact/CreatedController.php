<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;

class CreatedController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('contact.create', [
            'categories' => $categories
        ]);
    }
    //
    //    public function __construct()
    //    {
    //        return view('contact.create');
    //    }

}
