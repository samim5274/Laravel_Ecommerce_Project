<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Login successfully!";
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
        $product = new Product();
        $product->name=$request->has('name')? $request->get('name'):'';
        $product->price=$request->has('price')? $request->get('price'):'';
        $product->amount=$request->has('amount')? $request->get('amount'):'';
        $product->is_active = 1;
        
        if($request->has('images'))
        {
            $files = $request->file('images');
            $ImageLocation = array();
            $i=0;
            foreach($files as $file)
            {
                $extention = $file->getClientOriginalExtension();
                $fileName = 'product-'. time() . ++$i . '.' . $extention;
                $location = '/images/uploads/';
                $file->move(public_path() . $location, $fileName);
                $ImageLocation[] = $location . $fileName;
            }

            $product->image=implode(' | ', $ImageLocation);
            $product->save();
            return back()->with('success','Products save successfully.');
        }
        else
        {
            return back()->with('error','Products save un-successfully.');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addProduct(){
        $products = Product::all();
        $returnProduct = array();

        foreach($products as $product)
        {
            $images = explode('|',$product->image);
            $returnProduct[] = [
                'name'=>$product->name,
                'price'=>$product->price,
                'amount'=>$product->amount,
                'image'=>$images[0]
            ];
        }

        return view('add_Products', compact('returnProduct'));
    }
}
