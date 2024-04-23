<?php

namespace App\Http\Controllers\Admin;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use Illuminate\Support\Facades\Storage;

//Il nostro Admin Controller differisce momentaneamente dal ProjectController creato inizialmente, perchè è corretto che sia l'admin a poter
//gestire il tutto, tramite auth sulla rotta admin.

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.admin', compact('projects'));
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
    public function store(StoreProjectRequest $request)
    {
        $request->validated();

        $newProject = new Project();

        if($request->hasFile('image')) {

            $path = Storage::disk('public')->put('project_images', $request->image);

            $newProject->image = $path;
        }

        $newProject->fill($request->all());

        $newProject->save();

        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(StoreProjectRequest $request, Project $project)
    {
        $request->validated();

        $project->update($request->all());

        $project->save();

        return redirect()->route('projects.show', ['project' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin');
    }
}
