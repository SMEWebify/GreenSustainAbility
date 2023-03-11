<?php

namespace App\Http\Livewire\LaravelExamples;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{

    public function render()
    {
        $Users = User::orderBy('id')->get();
        return view('livewire.laravel-examples.user-management', [
            'Users' => $Users,
        ]);
    }
}
