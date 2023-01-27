<?php

namespace App\Http\Controllers;

use App\Models\JobModel;
use App\Models\SkillJobModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\JobName;

class JobsController extends Controller
{
    public function create(){

        $job = JobModel::all();
       /*$skillsJob = SkillJobModel::all();
        $array = [
          'skill' => $skillsJob,
          'job' => $job
        ];*/
       //dd($job);
        return View('components.card-show')->with('job',$job);
    }

    public function store(Request $request){
      $formFields = $request->validate([
        'title' => 'required',
        'country' => 'required',
        'phone' => 'required',
        'offer' => 'required',
        'email' => ['required', 'email'],
        'city' => 'required',
        'description' => 'required'
    ]);

    JobModel::create($formFields);
    return redirect('/jobs')->with('message', 'gig created successfully!');
    }
    public function getDetails($id)
{

    $gig= JobModel::find($id);

    return view('components.gig-page', compact('gig'));
        
}


}
