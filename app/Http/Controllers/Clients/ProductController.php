<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::with('product')->get();
        $products = Product::with('firstImage')->where('status', 'in_stock')->paginate(9);

        foreach ($products as $pro) 
                {
                    $pro->image_url = $pro->firstImage ?-> image ? asset('storage/uploads/products/' . $pro->firstImage->image) : asset('storage/uploads/products/default-product.png');
                }
        return view('clients.pages.products', compact('categories', 'products'));
    }

    public function filter(Request $request)
    {
        $query = Product::query();

        // Apply filters based on request parameters
        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }

        // Filter by price range
        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        //Filter sort by price
        if ($request->has('sort_by')) {
            switch ($request->input('sort_by')) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'latest':
                    $query->orderBy('created_at', 'desc');
                    break;
                default:
                $query->orderBy('id', 'desc');
                    break;   
                
            }
        }

        $products = $query->paginate(9);

        foreach ($products as $pro) 
                {
                    $pro->image_url = $pro->firstImage ?-> image ? asset('storage/uploads/products/' . $pro->firstImage->image) : asset('storage/uploads/products/default-product.png');
                }

        return response()->json([
            'products' => view('clients.components.products_grid', compact('products'))->render(),
            'pagination' => $products->links('clients.components.pagination.pagination_custom')->render()
        ]);
    }

    public function detail($slug)
    {
        $product = Product::with('category', 'images')->where('slug', $slug)->firstOrFail();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(6)
            ->get();
        return view('clients.pages.product-detail', compact('relatedProducts', 'product'));
    }
}