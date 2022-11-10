<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    public $allUser;
    public $search = '';
    

 
    public function updatedSearch()
    {
        $this->allUser = User::where('name','like','%'. $this->search . '%')->get();

        dd($this->allUser);
    }

    public function mount()
    {
        $this->allUser = $this->list_of_users();
    }

    public function list_of_users(){
        return User::where('name' ,'!=','admin')->where('password','!=','secret')->get();

    }

    public function render()
    {
        return view('livewire.admin.user.users-table');
    }
}
