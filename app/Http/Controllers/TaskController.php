<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('tasks/index', ['tasks' => $tasks]);
    }

    public function show($id) {
        $task = Task::findOrFail($id);
        return view('tasks/show', ['task' => $task]);
    }

    public function create() {
        return view('tasks/create');
    }

    public function store(StorePostRequest $request): RedirectResponse {
        $validated = $request->validated();
        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();
        return redirect('/tasks')->with('success', 'Task created successfully');
    }

    public function edit($id) {
        $task = Task::findOrFail($id);
        return view('tasks/edit', ['task' => $task]);
    }

    public function update(StorePostRequest $request, $id): RedirectResponse {
        $validated = $request->validated();
        $task = Task::findOrFail($id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    public function destroy($id) {
        try {
            // Attempt to delete the task by ID
            Task::destroy($id);

            // Check if the task was deleted successfully
            if (Task::find($id) === null) {
                return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
            } else {
                return redirect()->route('tasks.index')->with('error', 'Failed to delete task');
            }
        } catch (Exception $e) {
            // Log the error message for debugging
            Log::error('Error deleting task: ' . $e->getMessage());

            return redirect()->route('tasks.index')->with('error', 'Failed to delete task');
        }
    }
}
 