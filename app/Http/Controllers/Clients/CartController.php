<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->merge(['quantity' => (int)$request->quantity]);
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);
        $product = Product::findOrFail($request->product_id);
        if($request->quantity > $product->stock){
            return response()->json(['message' => 'Số lượng vượt quá tồn kho.'], 400);
        }

        //if logged in them saved to database else save to session
        if(Auth::check()){
            $cartItem = CartItem::where('user_id', Auth::id())
                ->where('product_id', $request->product_id)
                ->first();

                if($cartItem)
                {
                    $cartItem->quantity += $request->quantity;
                    $cartItem->save();
                } else {
                    CartItem::create([
                        'user_id' => Auth::id(),
                        'product_id' => $request->product_id,
                        'quantity' => $request->quantity,
                    ]);
                    
                }

                $cartCount = CartItem::where('user_id', Auth::id())->count();
        } else {
            //If user is guest
            $cart = session()->get('cart', []);
            if(isset($cart[$request->product_id])){
                $cart[$request->product_id]['quantity'] += $request->quantity;
            } else {
                $cart[$request->product_id] = [
                    'product_id' => $request->product_id, 
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $request->quantity,
                    'stock' => $product->stock,
                    'image' => $product->images->first()->image ?? 'uploads/products/default-product.png',
                ];
            }
            session()->put('cart', $cart);
            $cartCount = count($cart);
        }

        return response()->json([
            'message' => true,
            'cart_count' => $cartCount,
        ]);
    }
    
    public function loadMiniCart()
    {
        $cartItems = [];
        if(auth()->check()){
            $cartItems = CartItem::with('product')->where('user_id', auth()->id())->get();
        } else {
            $cartItems = session('cart', []);
        }

        return response()->json(['status' => true, 
    'html' => view('clients.components.modals.includes.mini_cart', compact('cartItems'))->render()
    ]);
    }

    public function removeFromMiniCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
        ]);

        if(Auth::check()){
            CartItem::where('user_id', Auth::id())
                ->where('product_id', $request->product_id)
                ->delete();
                $cartCount = CartItem::where('user_id', Auth::id())->count();
        } else {
            $cart = session()->get('cart', []);
            unset($cart[$request->product_id]);
            session()->put('cart', $cart);
        }

        return response()->json(['status' => true, 'cart_count' => $cartCount]);
    }

    public function viewCart()
    {
        $cartItems = [];
        if(Auth::check()){
            
        } else {
            $cartItems = session()->get('cart', []);
        }

        return view('clients.pages.cart', compact('cartItems'));
    }
}