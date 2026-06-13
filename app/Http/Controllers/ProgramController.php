<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();

        return view('program.index', compact('programs'));
    }

    public function create()
    {
        return view('program.create');
    }

    public function store(Request $request)
    {
        Program::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()->route('programs.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $program = Program::findOrFail($id);

        return view('program.edit', compact('program'));
    }

    public function update(Request $request, string $id)
    {
        $program = Program::findOrFail($id);

        $program->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()->route('programs.index');
    }

    public function destroy(string $id)
    {
        $program = Program::findOrFail($id);

        $program->delete();

        return redirect()->route('programs.index');
    }
}