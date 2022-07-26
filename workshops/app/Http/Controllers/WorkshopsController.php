<?php

namespace App\Http\Controllers;

use App\Models\Workshops;
use Illuminate\Http\Request;


class WorkshopsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $workshops = match($request->sort) {
            'workshops-asc' => Workshops::orderBy('title', 'asc')->get(),
            'workshops-desc' => Workshops::orderBy('title', 'desc')->get(),
            default => Workshops::all()
        };
        return view('workshops.index', ['workshops' => $workshops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workshops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'address' => 'required',
            'title' => 'required',
            'contact' => 'required|min:12|max:12'
        ]);

        $workshop = new Workshops;

        $workshop->address = $request->address;
        $workshop->title = $request->title;
        $workshop->contacts = $request->contact;

        $workshop->save();
        return redirect()->route('workshops-index')->with('success', 'Workshop successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workshops  $workshops
     * @return \Illuminate\Http\Response
     */
    public function show(int $workshopsId)
    {
        $workshop = Workshops::where('id', $workshopsId)->first();
        return view('workshops.show', ['workshops' => $workshop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workshops  $workshops
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshops $workshops)
    {
        return view('workshops.edit', ['workshops' => $workshops]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workshops  $workshops
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshops $workshops)
    {
        $workshops->address = $request->newAddress;
        $workshops->title = $request->newTitle;
        $workshops->contacts = $request->newContact;
        $workshops->save();
        return redirect()->route('workshops-index')->with('infoUpdate', 'Workshops information have been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workshops  $workshops
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshops $workshops)
    {
        $workshops->delete();
        return redirect()->route('workshops-index')->with('deleted', 'Workshops information successfully deleted.');
    }
}
