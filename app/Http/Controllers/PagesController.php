<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function test() {
        $subs = NewsletterSubscriber::all();

        return view('test', [
            'subs' => $subs
        ]);
    }


}
