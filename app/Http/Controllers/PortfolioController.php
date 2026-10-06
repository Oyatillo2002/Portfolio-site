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
        $portfolioConfig = config('portfolio');
        
        $featuredProjects = Project::where('featured', true)
            ->orderBy('order')
            ->get();
        
        $skills = Skill::orderBy('category')->get()->groupBy('category');
        
        $experiences = Experience::orderBy('start_date', 'desc')->get()->groupBy('type');

        return view('portfolio.index', compact('portfolioConfig', 'featuredProjects', 'skills', 'experiences'));
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