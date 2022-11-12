<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Redis;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    public $test ;
    public $search = '';
    public $users = array();
 
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

    function view_user($id){
        return redirect()->route('admin.allusers.show',$id);
    }
    
    function update_user($id){
        return redirect()->route('admin.allusers.edit',$id);
    }
    function destroy_user($id){
        return redirect()->route('admin.allusers.destroy',$id);
    }

}
