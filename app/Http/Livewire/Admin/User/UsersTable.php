<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    public $users ;
    public $test ;

    public $search = '';
 

    public function updated($key,$value)
    {
       
    }

    public function updatedSearch($value)
    {
        $this->users = $this->list_of_users()->where('name','like','%'. $value . '%')->get();
    }

    public function mount()
    {
        $this->users = $this->list_of_users()->get();
    }

    public function list_of_users(){

        return User::where('name' ,'!=','admin')->where('password','!=','secret');

    }

    public function render()
    {
        return view('livewire.admin.user.users-table');
    }
}
