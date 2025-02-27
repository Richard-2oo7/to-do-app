<?php

namespace App\Http\Controllers;

use App\Models\Panel;
use App\Http\Requests\StorePanelRequest;
use App\Http\Requests\UpdatePanelRequest;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePanelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Panel $panel)
    {
        $panelWithTasksHtml = view('components.panel', ['panel' => $panel])->render();
        return response()->json([
            'message' => 'taken goed opgehaald',
            'data' => $panelWithTasksHtml
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Panel $panel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePanelRequest $request, Panel $panel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Panel $panel)
    {
        //
    }
}
