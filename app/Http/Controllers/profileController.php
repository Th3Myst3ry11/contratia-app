<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Array_;

class profileController extends Controller
{
    public function index(){
        $userProfile = ProfileModel::find(auth()->user()->id);
       if($userProfile){
        return view('components.profiles.profile',compact('userProfile'));
       }else{
        return view('components.profiles.profileEdit');
       }             
    }
    public function show(Request $request){
        $userProfile = ProfileModel::find($request->id);
        return view('components.profiles.profile',compact('userProfile'));
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
        $user = ProfileModel::firstOrNew([
            'user_fk' => auth()->user()->id
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
       // ProfileModel::create($formFields);
        
      // $userProfile =  ProfileModel::where('user_fk',session('user_id'))->first();
     return $this->index();
       /* $formFields = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'offer' => 'required',
            'email' => ['required', 'email'],
            'city' => 'required',
            'country' => 'required',
            'currency' => 'required',
            'rate' => 'required',
            'description' => 'required'
        ]);*/
        

       
    }
}
