<?php

namespace App\Http\Controllers;

use App\Models\SelectedServices;
use Illuminate\Http\Request;
use App\Models\Workshops;
use App\Models\Mechanic;
use App\Models\Service;
use DB;

class SelectedServicesController extends Controller
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
    public function index()
    {
        $workshops = Workshops::all();
        return view('selectedServices.index', ['workshops' => $workshops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workshops = Workshops::all();
        $mechanics = Mechanic::all();
        $services = Service::all();
        return view('selectedServices.create', ['workshops' => $workshops, 'mechanics' => $mechanics, 'services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SelectedServices  $selectedServices
     * @return \Illuminate\Http\Response
     */
    public function show(SelectedServices $selectedServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SelectedServices  $selectedServices
     * @return \Illuminate\Http\Response
     */
    public function edit(SelectedServices $selectedServices)
    {
        
    
        return view('selectedServices.edit', ['selectedServices' => $selectedServices]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request;  $request
     * @param  \App\Models\SelectedServices  $selectedServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SelectedServices $selectedServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SelectedServices  $selectedServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(SelectedServices $selectedServices)
    {
        //
    }
}
