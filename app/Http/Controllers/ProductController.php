<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
     public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $product = new Product;
        return view('products.form', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
        ]);
        $productData = $request->all();
        if(isset($productData['update_product'])){
            $productId = $productData['update_product'];
            $product = Product::find($productId);
            $product->update($productData);
            return redirect()->route('products.index')
                        ->with('success','Product Updated successfully.');
        } else{
    		$sku = preg_replace('~[^\pL\d]+~u', '-', $productData['product_name']);
            $productData['sku'] = $sku;
            Product::create($productData);
            return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
        }
    }

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.form',compact('product'));
    }
    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
