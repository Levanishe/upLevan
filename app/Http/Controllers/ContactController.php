<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showOneMessage(int $id) {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }
}
