<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class Jobs extends Component
{
    public $jobs;
    public $jobname, $business, $email, $activities, $softskills, $hardskills, $knowledge;

    public function render()
    {
        $this->jobs = Job::all();
        return view('livewire.jobs');
    }
}
