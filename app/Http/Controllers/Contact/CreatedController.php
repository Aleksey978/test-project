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
        return view('contact.create');
    }
//
//    public function __construct()
//    {
//        return view('contact.create');
//    }

}
