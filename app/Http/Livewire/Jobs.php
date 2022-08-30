<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class Jobs extends Component
{
    public $jobs;
    public function render()
    {
        $this->jobs = Job::all();
        return view('livewire.jobs');
    }

    public function create()
    {
        //Go to form page to create a new job
        $this->redirect('form');
    }

    public function storeJob()
    {
        Job::updateOrCreate(['id' => $this->id], [
            'jobname' => $this->jobname,
            'business' => $this->business,
            'email' => $this->email,
            'activities' => $this->activities,
            'softskills' => $this->softskills,
            'hardskills' => $this->hardskills,
            'knowledge' => $this->knowledge,
        ]);
    }
}
