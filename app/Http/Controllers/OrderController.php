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
        return view('admin.userhistory');
    }

    public function pending()
    {
        $pending = User::where('id', '!=', '1')->get();
        return view('admin.pendingOrder', ['pending' => $pending]);
    }
}
