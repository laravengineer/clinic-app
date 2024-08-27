<?php

namespace App\Livewire;

use App\Models\Speciality;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SpecialityRegister extends Component
{
    #[Validate('required|string')]
    public $name = '';

    public function save()
    {
        $this->validate();
        Speciality::create(['name'=> $this->name]);

        session()->flash('message','speciality created successfully');
        return $this->redirect(route('admin-specialities'), navigate: true);
    }

    public function render()
    {
        return view('livewire.speciality-register');
    }
}
