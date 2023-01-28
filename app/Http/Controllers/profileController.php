<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){
        return view('components.profile');
    }

    public function store(Request $request){''
        ProfileModel::create($request->all());
        return redirect('/profile');
        $formFields = $request->validate([
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
        ]);
        

       
    }
}
