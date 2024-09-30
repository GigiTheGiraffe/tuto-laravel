<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(5);
        return view('jobs.index', ['jobs' => $jobs]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show', data: ['job' => $job]);
    }
    public function store()
    {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    //Créer le job
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 5
    ]);
    return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', data: ['job' => $job]);
    }
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
    
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
    
        return redirect('jobs/' . $job->id);
    }
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
