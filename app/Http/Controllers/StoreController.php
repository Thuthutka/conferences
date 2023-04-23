<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Conference;
use Illuminate\View\View;
class StoreController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $conference = new Conference();
        $conference->title = $request->input('title');
        $conference->content = $request->input('content');
        $conference->save();


        return redirect()->route('conferences.show', ['id' => $conference->id]);
    }
}
