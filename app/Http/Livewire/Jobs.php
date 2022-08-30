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

    public function create()
    {
        return redirect()->to('/form');
    }

    public function storeJob()
    {
        $this->validate([
            'jobname' => 'required',
            'business' => 'required',
            'email' => 'required',
            'activities' => 'required',
            'softskills' => 'required',
            'hardskills' => 'required',
            'knowledge' => 'required',
        ]);

        Job::create([
            'jobname' => $this->jobname,
            'business' => $this->business,
            'email' => $this->email,
            'activities' => $this->activities,
            'softskills' => $this->softskills,
            'hardskills' => $this->hardskills,
            'knowledge' => $this->knowledge,
        ]);


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
