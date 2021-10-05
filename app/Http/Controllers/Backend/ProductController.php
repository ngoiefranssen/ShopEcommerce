<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductSaveRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');

     }

    public function index()
    {

        $products = Product::latest()->paginate(12);

        return view('products.index', compact('products'));

      // dd(Product::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('add-product');

        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSaveRequest $request)
    {
        //
        $this->authorize('add-product');

        $products_received=
        [
            'category_id' => $request->category_id,
            'nom' => $request->nom,
            'description'=> $request->description,
            'prix' =>$request->prix

        ];

       // dd($products_received);


        $product_created = Product::create($products_received);

        $this->isImagePresent($product_created);

        return redirect()->route('products.index')->with('success', 'product  created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    public function search(string $query)
    {
        return  Product::search($query)->get();

    }

    public function isImagePresent(Product $product)
    {
        if(request('image_url'))
        {
            $product->update([

                'image_url' => request('image_url')->store('products', 'public')
            ]);
        }
    }
}
