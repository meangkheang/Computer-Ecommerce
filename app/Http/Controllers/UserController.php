<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Redirect;

use function GuzzleHttp\Promise\queue;

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

        $user = User::where('email',$request['email'])->where('password',$request['password'])->first();

        //get user authication
        $request->session()->put('user', $user);

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

        $request->session()->put('user', $user);
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
        session()->remove('user');

        return redirect()->to('/');
    }

    public function checkout(Request $request){
        
        $user = session('user');
        if(!$user){
            return redirect('/auth');
        }
        
        //get all carts first
        $cart_products = Cart::all();

        //create new quantity to replace without old one in carts table
        $quantity = $request['quantity'];

        //order id
        $order_id = fake()->randomNumber();
        

        foreach ($cart_products as $index => $cart) {

            //replace old quantity with new quantity if quantiy have change
            if($cart->quantity != (int)$quantity[$index]){
                $cart->update(array('quantity'=>(int)$quantity[$index]));
            }

            Order::create([
                'user_id' => session('user.id'),
                'product_id' => $cart['product_id'],
                'quantity' => $cart->quantity,
                'order_id' => $order_id,
                'total' => $cart->quantity * $cart->product->price
            ]);

        }

         //remove all carts after checkout
         Cart::query()->delete();
            
         //remove all cart_count session
         session()->put('cart_count',0);
         return redirect('/cartlist');
        
    }

    public function myorders(){
        if(!session('user')) return redirect('/');

        // $orders = Order::latest()->paginate(2);
        // $orders->setCollection($orders->groupBy('order_id'));


        $orders = Order::latest()->where('user_id',session('user.id'))->get()->groupBy('order_id');

        return view('myorders',compact('orders'));
    }
    public function myaccount(){
        
        if(!session()->has('user')){
            return redirect('/');
        }
        return view('myaccount');
    }
}
