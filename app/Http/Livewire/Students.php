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

    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $modalStatus;

    public function openModal()
    {
        $this -> resetInputFields();
        $this -> modalStatus = true;
    }

    public function closeModal()
    {
        $this -> modalStatus = false;
    }

    public function resetInputFields()
    {
        $this -> firstname = '';
        $this -> lastname = '';
        $this -> email = '';
        $this -> phone = '';
    }

    public function store()
    {
        $validateData = $this -> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Student::create($validateData);
        session() -> flash('message', '新規投稿に成功しました。');
        $this -> resetInputFields();
        $this -> closeModal();
    }

}
