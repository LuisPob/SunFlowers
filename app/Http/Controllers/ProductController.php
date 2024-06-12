<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
        $company = Company::findOrFail(1);

        return view('product.index', compact('products', 'company'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $categories = TipoProducto::pluck('name', 'id');
        return view('product.create', compact('product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = request()->validate(Product::$rules);

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('images', ['disk' => 'public']); 
            // $path = $request->file('image_path')->store('public/images');
            dd(basename($path));
            $validatedData['image_path'] = basename($path);
        }
        // dd($validatedData);

        $product = Product::create($validatedData);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('category')->find($id);
        $category = TipoProducto::where('id', $product->category_id)->pluck('name');
    
        return view('product.show', compact('product', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = TipoProducto::pluck('name', 'id');

        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = request()->validate(Product::$rules);
        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('images', ['disk' => 'public']); 
            $validatedData['image_path'] = basename($path);
        }
        $product->update($validatedData);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
