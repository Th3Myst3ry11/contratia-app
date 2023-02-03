<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\skillsModel;
use App\Models\ProfileModel;
use Illuminate\Http\Request;
use App\Models\countrysModel;

class Search extends Component
{   public $searchTerm;
    public $profiles;
    public $skillFilter ;
    public $countryFilter;
    public $countries;
    public $skills;
    public function render()
    {   $searchTerm = '%'. $this->searchTerm . '%';
        $this->profiles = ProfileModel::where('firstname','like', $searchTerm)
        ->orwhere('id', 'like', $searchTerm)
        ->get();
        $this->countries = countrysModel::all();
        $this->skills = skillsModel::all();
        return view('livewire.search');
    }
    public function filter(){
        $this->profiles = ProfileModel::where('country', '=', $this->skillFilter)
        ->orwhere('skill',  'like' , '%'. $this->countryFilter . '%')
        ->get();
        return view('livewire.search');
    }
}

