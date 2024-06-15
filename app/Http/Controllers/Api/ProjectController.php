<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        // $projects = Project::all();
        $projects = Project::with('types', 'technologies')->paginate(3);



        return response()->json([
            // 'projects' => $projects,
            'projects' => $projects

        ]);
    }
}
