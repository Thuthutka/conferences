<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConferencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'edit', 'update', 'destroy');
    }

    /**
     * @return View
     */
    public function index(Conference $conference): View{
        return view('conferences.index', ['conferences' => $conference->all()]);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        return \view('conferences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConferenceRequest $request)
    {
        $request->validated();
        $conference = new Conference();
        $conference->title = $request->input('title');
        $conference->content = $request->input('content');
        $conference->date = $request->input('date');
        $conference->address = $request->input('address');
        $conference->save();

        $request->session()->flash('status', 'Conference created');

        return redirect()->route('conferences.show', ['conference' => $conference->id]);
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return View
     */
    public function show(string $id): View
    {
        //abort_if(!isset($this->articles[$id]), 404);
        return view('conferences.show', ['conference' => Conference::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('conferences.edit', ['conference' => Conference::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     * @param StoreConferenceRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreConferenceRequest $request, int $id): RedirectResponse
    {
        $conference = (new Conference())->findOrFail($id);
        $validated = $request->validated();
        $conference->fill($validated);
        $conference->save();

        $request->session()->flash('status', 'Conference was updated');

        return redirect()->route('conferences.show', ['conference'=>$conference->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference was deleted!');

        return redirect()->route('conferences.index');
    }
}
