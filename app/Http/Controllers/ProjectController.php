<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:64',
            'description' => 'required|string|max:255',
            'languages' => 'required|string|max:64',
            'project_status' => 'required|string|max:16',
            'start_date' => 'required|date',
            'end_date' => 'required|date',

        ],
        [
            'title.required' => 'Titolo progetto obbligatorio.',
            'description.required' => 'Descrizione progetto obbligatorio.',
            'languages.required' => 'Linguaggio/i progetto obbligatorio.',
            'project_status.required' => 'Stato Progetto progetto obbligatorio.',
            'start_date.required' => 'Data inizio progetto obbligatorio',
            'end_date.required' => 'Fine inizio progetto obbligatorio.',
            'title.max' => 'Il Titolo non può essere più di 64 caratteri.',
            'description.max' => 'La Descrizione non può essere più di 255 caratteri.',
            'languages.max' => 'Il Linguaggio non può essere più di 64 caratteri.',
            'project_status.max' => 'Lo Stato del Progetto non può essere più di 16 caratteri.',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('projects.create') 
                ->withErrors($validator) 
                ->withInput(); 
        }

        Project::create($data);
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:64',
            'description' => 'required|string|max:255',
            'languages' => 'required|string|max:64',
            'project_status' => 'required|string|max:16',
            'start_date' => 'required|date',
            'end_date' => 'required|date',

        ],
        [
            'title.required' => 'Titolo progetto obbligatorio.',
            'description.required' => 'Descrizione progetto obbligatorio.',
            'languages.required' => 'Linguaggio/i progetto obbligatorio.',
            'project_status.required' => 'Stato Progetto progetto obbligatorio.',
            'start_date.required' => 'Data inizio progetto obbligatorio',
            'end_date.required' => 'Fine inizio progetto obbligatorio.',
            'title.max' => 'Il Titolo non può essere più di 64 caratteri.',
            'description.max' => 'La Descrizione non può essere più di 255 caratteri.',
            'languages.max' => 'Il Linguaggio non può essere più di 64 caratteri.',
            'project_status.max' => 'Lo Stato del Progetto non può essere più di 16 caratteri.',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('projects.edit', $project->id) 
                ->withErrors($validator) 
                ->withInput(); 
        }

        $project->update($data);
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
