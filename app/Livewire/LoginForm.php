<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class LoginForm extends Component
{
    public $email = "";
    public $password = "";

    public function save()
    {
        if (Auth::attempt($this->only(['email', 'password']))) {
            $this->reset();
            $this->redirectRoute('index');
        }
    }

    #[Layout('components.layouts.base')]
    public function render()
    {
        if (Auth::check()) {
            $this->redirectRoute('index');
        }
        return view('livewire.login-form');
    }
}
