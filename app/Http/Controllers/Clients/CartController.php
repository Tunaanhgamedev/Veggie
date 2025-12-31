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
        
        if(Auth::check()){
            $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get()->map(function($item) {
                return [
                    'product_id' => $item->product->id,
                    'name' => $item->product->name,
                    'price' => $item->product->price,
                    'quantity' => $item->quantity,
                    'stock' => $item->product->stock,
                    'image' => $item->product->images->first()->image ?? 'uploads/products/default-product.png',
                ];
            })->toArray();
        } else {
            $cartItems = session()->get('cart', []);
        }
        return view('clients.pages.cart', compact('cartItems'));
    }

    function updateCart(Request $request)
    {
        $productId = $request->product_id;
        $quantity = (int)$request->quantity;
        if(Auth::check()){
            $cartItems = CartItem::where('user_id', Auth::id())->where('product_id', $productId)->first();
            if(!$cartItems){
                return response()->json(['status' => false, 'message' => 'Sản phẩm không tồn tại trong giỏ hàng.']);
            }
            $product = Product::find($productId);
            if($quantity > $product->stock){
                return response()->json(['status' => false, 'message' => 'Số lượng vượt quá tồn kho.']);
            }

            $cartItems->quantity = $quantity;
            $cartItems->save();
        } else {
            $cart = session()->get('cart', []);

            if(!isset($cart[$productId])){
                return response()->json(['status' => false, 'message' => 'Sản phẩm không tồn tại trong giỏ hàng.']);
            }
            $product = Product::find($productId);
            if($quantity > $product->stock){
                return response()->json(['status' => false, 'message' => 'Số lượng vượt quá tồn kho.']);
            }

            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }
        // Calculate cartTotal again
        $subtotal = $quantity * $product->price;
        $total = $this->calculateCartTotal();
        $grandTotal = $total + 25000; // Add tax or other fees if needed
        return response()->json([
            'quantity' => $quantity,
            'subtotal' => number_format($subtotal, 0, ',', '.'),
            'total' => number_format($total, 0, ',', '.'),
            'grandTotal' => number_format($grandTotal, 0, ',', '.')
        ]);
    }

    //Handle removeCartItem
        function removeCartItem(Request $request){
        $productId = $request->product_id;
        
        if(Auth::check()){
            CartItem::where('user_id', Auth::id())->where('product_id', $productId)->delete();
            
        } else {
            $cart = session()->get('cart', []);

            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        $total = $this->calculateCartTotal();
        $grandTotal = $total + 25000;
        return response()->json([
            'total' => number_format($total, 0, ',', '.'),
            'grandTotal' => number_format($grandTotal, 0, ',', '.')
        ]);
    }

    function calculateCartTotal()
    {
        if(Auth::check()){
            return CartItem::where('user_id', Auth::id())->with('product')->get()->sum(fn($item) => $item->quantity * $item->product->price);
           
        } else {
            $cart = session()->get('cart', []);
            return collect($cart)->sum(fn($item) => $item['quantity'] * $item['price']);
        }
    }
}