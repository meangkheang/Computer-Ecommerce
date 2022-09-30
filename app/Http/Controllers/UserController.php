<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|min:8|email',
            'password' => 'required|min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:8'
        ]);


        User::create($input);

        //get user authication
        $request->session()->put('name', $request->name);

        return redirect('/')->with('message', 'create user successfully');

        //dd(1);  
    }

    public function store2(Request $request)
    {
        $input = $request->all();

        $validated = $request->validate([
            'email' => 'required|min:8',
            'password' => 'required|min:8',
        ]);

        //check if email and password the same in table
        $user = User::where('email', $input['email'])->where('password', $input['password'])->first();

        
        if (!$user) {
            return back()->with('message', 'Sorry, User can\'t be found'); //if user already have return to login page
        }

        $request->session()->put('name', $user->name);
        return redirect('/')->with('message', 'Log in successfully');;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // session()->flush();

        // Redirect::action('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout()
    {

        //remove all session
        session()->flush();

        return redirect()->to('/');
    }
}
