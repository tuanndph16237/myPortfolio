<?php

namespace App\Livewire\WebFrontend;

use App\Models\About;
use Livewire\Component;
use App\Models\Skill;

class HomeComponent extends Component
{
    public function render()
    {
        $skills=Skill::limit(5)->get();
        $skills2=Skill::orderBy("id",'desc')->limit(5)->get();
        $about=About::first();
        return view('livewire.web-frontend.home-component',['skills'=>$skills,'skills2'=>$skills2,'about'=>$about])->layout("layouts.base");
    }
}
