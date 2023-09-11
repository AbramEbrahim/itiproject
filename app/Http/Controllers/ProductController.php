<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products=Product::get();
        return view('product',['products'=>$products]);
    }

    public function adminindex()
    {
        $products=Product::get();
        return view('adminpage',['products'=>$products]);
    }

    public function detail($id)
    {
        $product= Product::find($id);
        return view('detail',['product'=>$product]);
    }

    public function search(Request $request)
    {

        $product = Product::where('name' , 'like' , '%' . $request->input('s') . '%')->get();
        return view('search', ['products'=>$product] ) ;
    }
    
    public function add_to_cart(Request $request)
    {
        if ($request->session()->has('signer')) {
            
            $cart= new Cart;
            $cart->user_id = $request->session()->get('signer')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/login');
        }
        else {
            return redirect('/login');
        }
    }

    static function cart_item()
    {
        if (Session::has('signer')) {
        $signerid= Session::get('signer')['id'];
        return Cart::where('user_id',$signerid)->count();
        }
    }

    function cartlist(){
        $signerid= Session::get('signer')['id'];
        $products =DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$signerid)
        ->select('products.*' , 'cart.id as cart_id')->get();
        return view('cartlist',['products'=>$products]);
    }

    function removecart($id){
    Cart::destroy($id);
    return redirect('cartlist');
    }
    
    function ordernow(){
        $signerid= Session::get('signer')['id'];
        $totalprice= $products =DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$signerid)
        ->sum('products.price');
        return view('ordernow',['totalprice'=>$totalprice]);
    
        }

    function orderaddress(Request $request)
    {
        $signerid= Session::get('signer')['id'];
        $allcart = Cart::where('user_id',$signerid)->get();
        
        foreach ($allcart as $cart)
        {
            $order= new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;

            $order->save();
            Cart::where('user_id',$signerid)->delete();
        }
        $request->input();
        return redirect('/');
    }

    function myorders(){

        $signerid= Session::get('signer')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$signerid)
        ->get();
        return view('myorders',['orders'=>$orders]);
    
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $imagename= time(). '.' . $request->image->extension();
        $request->image->move(public_path('imeges'),$imagename);
        $data = $request->all();
        $data['image']=$imagename;
        Product::create($data);
        return redirect('adminpage');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product=Product::find($id);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    function update($id)
    {
        
        $product=Product::find($id);
        return view('product.update',compact('product'));

    }
    function edit($id,Request $request)
    {
        $data=$request->except('_token','_mathod');
        if ($request->hasFile('image')) 
        {
            $imagename= uniqid(). '.' . $request->image->extension();
            $request->image->move(public_path('images',$imagename));
            $data['image']=$imagename;
        }
        
        $product=Product::find($id);
        $oldimage=$product->image;
        $product->update($data);
        // if ($oldimage != 'default.jpg' && $request->hasFile('image')) {
        //     Product::delete(public_path('images/'.$oldimage));
        // }
        return redirect('adminpage');
        
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        
        if ($product->image != 'default.jpg') {
            Product::delete(public_path('images/'.$product->image));
        }
        return redirect('adminpage');

    }
}
