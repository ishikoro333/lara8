<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public function render()
    {
        $students = Student::orderBy('id', 'DESC') -> get();
        return view('livewire.students.index', compact('students'));
    }
}
