<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Array_;

class profileController extends Controller
{
    public function index(){
        return view('components.profile');
    }

    public function store(Request $request){
        $formFields = $request->all();
        $formFields['user_fk'] = auth()->user()->id;
        //sdd($formFields);
        ProfileModel::create($formFields);
      // $userProfile =  ProfileModel::where('user_fk',session('user_id'))->first();
       $userProfile = ProfileModel::find(auth()->user()->id);
      
        //dd($userProfile['description']);
        return view('components.profile',compact('userProfile'));
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
