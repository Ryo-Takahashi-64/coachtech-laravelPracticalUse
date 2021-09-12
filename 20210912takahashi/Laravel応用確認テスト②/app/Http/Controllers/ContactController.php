<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ClientRequest;
// use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function thanks (ClientRequest $request)
    {
        $uuid = (string)Str::uuid();
        Contact::create([
            'uuid' => $uuid,
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return view('thanks');
    }
}
