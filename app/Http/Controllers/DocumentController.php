<?php

namespace App\Http\Controllers;

class DocumentController extends Controller
{
    public function index()
    {
        return view('documents.index');
    }

    public function create()
    {
        return view('documents.create');
    }
}
