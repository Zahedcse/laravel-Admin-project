<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $products = Product::all();
        return view('backend.products.index', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> ['required', 'min:3', 'max:30'],
        ]);
        // working with image files
        $path = $request->file('img')->store('public/Images');
        //  $filename= date('YmdHi').$file->getClientOriginalName();
        // $file-> move(public_path('public/Image'), $filename);
        // $data['image']= $filename;

        Product::create([
            'title' => $request->title,
            'type' => $request->type,
            'price' => $request->price,
            'img' => $path,
        ]);

        // $input = $request->all();

        // if ($image = $request->file('img')) {
        //     $destination = 'public/Images';
        //     $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destination, $imageName);
        //     $input['img'] = "$imageName";
        // }

        // Product::create($input);

        return redirect()->route('product.index')->with('msg', 'Task added successfully');
    }

    /**
     * Display the specified resource.
     *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.products.edit', [
            'product' =>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('public/Images');
            $product->img = $path;
        }
        $product->fill($request->post())->save();
        return redirect()->route('product.index')->with('msg', 'product upated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('msg', 'Deleted Successfully');
    }
}
