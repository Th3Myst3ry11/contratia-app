<?php

namespace App\Http\Controllers;

use App\Models\JobModel;
use App\Models\SkillJobModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
public function update(Request $request){
  $formFields = $request->all();
  // dd($formFields);

   $formFields['user_fk'] = auth()->user()->id;
 
   // ensure the request has a file before we attempt anything else.
   if ($request->hasFile('image')) {

       $request->validate([
           'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
       ]);

       
       $new_file = $request->file('image'); // get the file from the request

       $new_file->storeAs('public/images',$new_file->getClientOriginalName()); 
       $formFields['file_path'] =$new_file->getClientOriginalName();
       
      // stores theb file locally in images folder
   }
   //sdd($formFields);
   $user = JobModel::firstOrNew([
       'id' => session('jobID')
   ]);
$user->firstname = $formFields['firstname'];
$user->lastname = $formFields['lastname'];
$user->file_path = $formFields['file_path'];
$user->rate = $formFields['rate'];
$user->currency = $formFields['currency'];
$user->city = $formFields['city'];
$user->title = $formFields['title'];
$user->country = $formFields['country'];
$user->description = $formFields['description'];
$user->user_fk = $formFields['user_fk'];
$user->skill = $formFields['skill'];
$user->email = $formFields['email'];
$user->save();
}
    public function store(Request $request){
      $formFields = $request->all();
      // dd($formFields);
    
       $formFields['user_fk'] = auth()->user()->id;
     
       // ensure the request has a file before we attempt anything else.
       if ($request->hasFile('image')) {
    
           $request->validate([
               'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
           ]);
    
           
           $new_file = $request->file('image'); // get the file from the request
    
           $new_file->storeAs('public/images',$new_file->getClientOriginalName()); 
           $formFields['file_path'] =$new_file->getClientOriginalName();
           
          // stores theb file locally in images folder
       }
       //sdd($formFields);
       $user = new JobModel();
   
    $user->file_path = $formFields['file_path'];
    $user->offer = $formFields['offer'];
    $user->city = $formFields['city'];
    $user->title = $formFields['title'];
    $user->country = $formFields['country'];
    $user->description = $formFields['description'];
    $user->user_fk = $formFields['user_fk'];
    $user->skill = $formFields['skill'];
    $user->email = $formFields['email'];
    $user->save();
    return redirect('/jobs')->with('message', 'gig created successfully!');
    }
    public function getDetails($id)
{

    $gig= JobModel::find($id);

    return view('components.gig-page', compact('gig'));
        
}

public function show(Request $request){
  $job = JobModel::find($request->id);
  return view('components.card-show',compact('job'));
}

}
