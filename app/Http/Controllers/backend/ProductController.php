<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lesson;
use App\Models\Manufacturer;
use App\Models\Product;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $cats = Category::all();
        $manufacturers = Manufacturer::all();
        return view('backend.products.index', compact('products', 'cats', 'manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Category::all();
        $manufacturer = Manufacturer::all();
        return view('backend.products.create', compact('cats', 'manufacturer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Naam koi ??',
            'name.min' => ' give more letter to your name',
        ] ;

        // left side = input field | right side = rules 
        $validate =  $request->validate([
            'name' => 'required|min:3|max:50',
            'desc' => 'required|min:4|max:255',
            'price' => 'required|numeric',
            'cats' => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ],$messages);

        $filename = time(). '.' . $request->photo->extension() ;

      if ($validate) {
         // left side = db field | right side = input field
        $data = [
            'name' => $request->name ,
            'description' => $request->desc ,
            'price' => $request->price ,
            'category_id' => $request->cats ,
            'image' => $filename,
        ] ;

        $model = new Product();
        if( $model->insert($data) ){
            $request->photo->move(public_path('images'), $filename);
            return redirect('/product')->with('msg' , 'successfully inserted');
        }
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $data2['cats'] = Category::all();
        $data['product'] = $product ;
        return view('backend.products.edit', compact('data', 'data2' )) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id) ;

        $messages = [
            'name.required' => 'Naam koi ??',
            'name.min' => ' give more letter to your name',
        ] ;


        $validate =  $request->validate([
            'name' => 'required|min:3|max:50',
            'desc' => 'required|min:4|max:255',
            'price' => 'required|numeric',
            'cats' => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ],$messages);

        $filename = time(). '.' . $request->photo->extension() ;

        if ($validate){
            $data = [
                'name' => $request->name ,
                'description' => $request->desc ,
                'price' => $request->price ,
                'category_id' => $request->cats ,
                'image' => $filename,
            ] ;
            // print_r($data);
            $product->update($data);
            $request->photo->move(public_path('images'), $filename);
            return redirect('/product')->with('msg', 'data updated successfully') ;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product')->with('msg_delete', 'khel Khotom');
    }
}
