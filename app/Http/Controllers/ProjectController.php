<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest('updated_at')->get();
        return view('home' , compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('project_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
           'name'=>'required ' ,
            'section' => 'in:programming,network,ai,iss | nullable',
        ]);
        $result = project::create([
            'name' => $request->name ,
            'created_by' => Auth::user()->id ,
            'section' => $request->section ,
        ]);
        if($result->exists()){
            return redirect()->back()->with(['massage' => 'added successfully']);
        }else{
            return redirect()->back()->with(['massage' => 'something was wrong!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        return view('project_show' , compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project){
        return view('project_edit' , compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        dd($request);
        $request->validate([
            'name'=>'required ' ,
            'section' => 'in:programming,network,ai,iss | nullable',
        ]);


        $project->update([
           'name' => $request->name ,
           'section' => $request->section ,
        ]);

        return redirect()->back()->with(['message'=>'up to date successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        $project->delete();
        return redirect()->back()->with(['message' =>'project deleted successfully']);
    }

    public function reserv(project $project){

        $project->update([
            'reserved_by'=>Auth::user()->id ,
        ]);
        return back();
    }
}
