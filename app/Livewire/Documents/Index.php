<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Index extends Component
{
    public function render()
    {
        return view('livewire.documents.index',[
            'documents'=>Auth::user()->documents
        ]);
    }
}
