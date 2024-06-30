<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use App\Models\TipoProducto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate();
        $company = Company::findOrFail(1);

        return view('product.index', compact('products', 'company'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    public function create()
    {
        $product = new Product();
        $categories = TipoProducto::pluck('name', 'id');
        return view('product.create', compact('product', 'categories'));
    }

    public function store(Request $request)
    {
        $validatedData = request()->validate(Product::$rules);

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('images', ['disk' => 'public']); 
            $validatedData['image_path'] = basename($path);
        }

        $product = Product::create($validatedData);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::with('category')->find($id);
        $category = TipoProducto::where('id', $product->category_id)->pluck('name');
    
        return view('product.show', compact('product', 'category'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = TipoProducto::pluck('name', 'id');

        return view('product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

    public function generatePDF()
    {
        $products = Product::all();
        $company = Company::findOrFail(1);

        $data = [
            'products' => $products,
            'company' => $company,
            'title' => 'Lista de Productos',
            'date' => date('m/d/Y')
        ];

        $pdf = Pdf::loadView('pdf.products', $data);

        return $pdf->download('productos.pdf');
    }
}
