<?php

namespace App\Http\Controllers;

use App\Models\Task;
// use App\Http\Requests\StoreTaskRequest
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class TaskController extends Controller
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
    public function create(Request $request)
    {
        // Validatie
        $validatedItems = $request->validate([
            'panel_id' => ['required'],
            'title' => ['required'],
        ]);

        // // Logica om de taak aan te maken
        $task = Task::create($validatedItems);

        $taskHTML = view("components.task", ['task' => $task])->render();

        return response()->json([
            'message' => 'Task created successfully.', 
            'data' => $taskHTML 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $taskComponentHtml = view('taskshow', ['task' => $task])->render();

        return response()->json([
            'html' => $taskComponentHtml,
            'message' => 'taak gegevens succesvol opgehaald',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
            
        $validatedItems = $request->validate([
            'completed' => 'required|boolean',
        ]);
        
        

        $task->update($validatedItems);


        return response()->json([
            'message' => 'taak succesvol geupdate'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
