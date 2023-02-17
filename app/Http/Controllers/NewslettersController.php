<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    public function store(Request $request) {

        $name = $request->name;
        $email = $request->email;

        NewsletterSubscriber::create([
            'name' => $name,
            'email' => $email
        ]);

        return back();
    }
}
