<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        return Project::all();
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        return Project::create($request->all());
    }

    public function show($id) {
        return Project::findOrFail($id);
    }

}
