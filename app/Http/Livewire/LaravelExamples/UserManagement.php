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

    public function invalide($id){
        // Update line
        User::where('id',$id)->update(['validate'=>0]);

        session()->flash('success','User unvalidate successfully');
    }

    public function valide($id){
        // Update line
        User::where('id',$id)->update(['validate'=>1]);

        session()->flash('success','User validate successfully');
    }
}
