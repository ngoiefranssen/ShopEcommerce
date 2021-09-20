<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Product::latest(5)->get());
/*
        $students = [

            [
                'id' => 1,
                'nom' => 'Jean'],

[
    'id' => 1,
    'nom' => 'Marc']

        ];

                $tableau = ['lundi', 'mardi', 'mercredi'];

                $collection_tableau = collect($students);

                $collection_maj = $collection_tableau->map(function($element){

                    return strtoupper($element['nom']);
                });

                dd($collection_maj);

*/

       return view('products.cart');
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
        $product = Product::find($request->id);

        Session::push('cart',  array(
            'id' => $product->id,
            'image_url' => $product->image_url,
            'nom' => $product->nom,
            'quantity' => $product->quantity,
            'qty_panier' => 1,
            'prix' => $product->prix,
        ));

        return redirect(url()->previous())->with('success', 'Produit ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $arr = array_map(function ($product) use ($id, $request) {
            return $product['id'] == $id
                ? array_merge($product, ['qty_panier' => $request->quantity]) : $product;
        }, Session::get('cart'));

        Session::put('cart', $arr);

        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = array_filter(Session::get('cart'), fn ($p) => $p['id'] != $id);
        Session::put('cart', $cart);
        return redirect(url()->previous())->with('success', 'Produit retiré avec succès');
    }
}
