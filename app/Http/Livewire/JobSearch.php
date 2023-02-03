<?php

namespace App\Http\Livewire;

use App\Models\JobModel;
use Livewire\Component;

class JobSearch extends Component
{   public $searchTerm;
    public $jobs;
    public function render()
    {    $searchTerm = '%'. $this->searchTerm . '%';
        $this->jobs = JobModel::where('title','like', $searchTerm)
        ->orwhere('id', 'like', $searchTerm)
        ->get();
        return view('livewire.job-search');
    }
}
