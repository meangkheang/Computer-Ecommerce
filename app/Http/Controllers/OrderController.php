<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderHistory()
    {
        $users = User::where('email','!=','admin@admin.com')->where('password','!=','secret')->get();


        return view('admin.userhistory',compact('users'));
    }

    public function pending()
    {
        $pending = User::where('id', '!=', '1')->get();
        return view('admin.pendingOrder', ['pending' => $pending]);
    }

    public function dashboard(){
        if($this->isAdmin()){
            
            return view('admin.dashboard');

        }
        return redirect('/');
    }
   

    public function isAdmin(): bool{
        if(session()->has('user')){
            if(session('user.name') != 'admin' && session('user.password') != 'secret'){
                return 0;
            }
            else{
                return 1;
            }
        }
    }
}
