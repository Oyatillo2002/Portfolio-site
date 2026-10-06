<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::where('featured', true)
            ->orderBy('order')
            ->take(6)
            ->get();
        
        $skills = Skill::orderBy('category')
            ->orderBy('order')
            ->get()
            ->groupBy('category');
        
        $experiences = Experience::orderBy('start_date', 'desc')
            ->get()
            ->groupBy('type');

        return view('portfolio.index', compact('featuredProjects', 'skills', 'experiences'));
    }

    public function projects()
    {
        $projects = Project::orderBy('order')->get();
        return view('portfolio.projects', compact('projects'));
    }

    public function project(Project $project)
    {
        return view('portfolio.project', compact('project'));
    }
}