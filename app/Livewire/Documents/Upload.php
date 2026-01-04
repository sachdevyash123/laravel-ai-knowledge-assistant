<?php

namespace App\Livewire\Documents;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Document;

class Upload extends Component
{
    use WithFileUploads;

    public $title;
    public $file;

    protected $rules = [
        'title' => 'required|string|max:255',
        'file' => 'required|file|mimes:txt,pdf|max:10240',
    ];

    public function save()
    {
        $this->validate();

        $path = $this->file->store('documents');

        Document::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'path' => $path,
            'content' => Storage::get($path),
        ]);

        session()->flash('success', 'Document uploaded successfully');

        return redirect()->route('documents.index');
    }

    public function render()
    {
        return view('livewire.documents.upload');
    }
}
