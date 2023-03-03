<?php

namespace App\Http\Livewire;

use App\Models\NewsletterSubscriber;
use Livewire\Component;

class SubscriberList extends Component
{
    public $subs;

    public function deleteAllSubscribers() {
        NewsletterSubscriber::truncate();
        $this->subs = NewsletterSubscriber::all();
        session()->flash('message', 'Alle subscribers verwijderd!');
    }

    public function render()
    {
        return view('livewire.subscriber-list');
    }


}
