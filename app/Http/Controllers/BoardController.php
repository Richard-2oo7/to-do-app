<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Http\Requests\StoreBoardRequest;
use App\Http\Requests\UpdateBoardRequest;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', [
            'boards' => Board::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $board = Board::create();
        $boardHTML = view('components.board', ['boards' => $board])->render();

        return response()->json([
            'message' => 'panel succesvol gemaakt',
            'html' => $boardHTML,
        ]);
    }
        // Validatie
        // $validatedItems = $request->validate([
        //     'panel_id' => ['required'],
        //     'title' => ['required'],
        // ]);

        // // // Logica om de taak aan te maken
        // $task = Task::create($validatedItems);

        // $taskHTML = view("components.task", ['task' => $task])->render();

        // return response()->json([
        //     'message' => 'Task created successfully.', 
        //     'data' => $taskHTML 
        // ]);
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBoardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Board $board)
    {
        $board->load('panels.tasks');
        return view('board', [
            'board' => $board,
            'panels' => $board->panels,
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBoardRequest $request, Board $board)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board)
    {
        //
    }
}
