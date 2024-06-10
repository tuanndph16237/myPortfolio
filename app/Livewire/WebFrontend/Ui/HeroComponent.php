<?php

namespace App\Livewire\WebFrontend\Ui;

use App\Models\Hero;
use Livewire\Component;

class HeroComponent extends Component
{
    public function render()
    {
        //$hero=Hero::where('status','active')->first();
        return <<<'blade'
        @php
        $hero=DB::table("heroes")->where("status","active")->first();
        @endphp

        @if($hero)
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('assets/img/{{$hero->image}}') top center;">
        <div class="hero-container" data-aos="fade-in">
          <h1>Alex Smith</h1>
          <p>I'm <span class="typed" data-typed-items="{{$hero->skill}}"></span></p>
        </div>
        </section>
        @else
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('assets/img/hero-bg.jpg') top center;">
        <div class="hero-container" data-aos="fade-in">
          <h1>Duc Tuan</h1>
          <p>I'm <span class="typed" data-typed-items="Full Stack Web Developer"></span></p>
        </div>
        </section>
        blade;
    }
}
