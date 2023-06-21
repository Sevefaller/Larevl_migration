<?php

namespace App\Http\Controllers;

use App\Models\Tests;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        $tasks = Tests::all();
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $task = Tests::create($request->all());
        return response()->json($task, 201);
    }

    public function show($id)
    {
        $task = Tests::findOrFail($id);
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task = Tests::findOrFail($id);
        $task->update($request->all());
        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Tests::findOrFail($id);
        $task->delete();
        return response()->json(null, 204);
    }
}
