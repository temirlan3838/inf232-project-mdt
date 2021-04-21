<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Resume;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class ProductController extends Controller
{
    //
    public function create(Request $request)
    {
        if ($request->session()->has('user')) {
        $product = new Resume();
        $product->user_id = $request->session()->get('user')['id'];

        if ($request->hasFile('res')) {
            $file = $request->file('res');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $product->resume = $filename;
        } else {
            return $request;
            $product->resume = '';
        }
        $product->save();
        return back();
    }else {
            return redirect('login');
        }
        // return $request->input();
    }
    public function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    public function addCart(Request $request)
    {
        if ($request->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('mdt');
        } else {
            return redirect('mdt/login');
        }
    }

    public static function cartItem()
    {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }

    public function cartlist() {
        $userId = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*', 'carts.id as cart_id')
        ->get();
        return view('cartlist', ['products'=>$products]);
    }

    public function removecart($id) {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    public function ordernow() {
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('carts')
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');      
        
        // return $total;
        return view('ordernow', ['total'=>$total]);
    }

    public function orderplace(Request $request ) {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payMethod = $request->payment;
            $order->payStatus = 'pending';
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $request->input();
        return redirect('mdt');
    }

    public function myorders() {
        $userId = Session::get('user')['id'];
        $orders =  DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id',$userId)
        ->get();
        
        // return $total;
        return view('myorders', ['orders'=>$orders]);
    }
 }
