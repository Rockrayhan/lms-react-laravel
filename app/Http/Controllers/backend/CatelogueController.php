<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Catelogue;
use Illuminate\Http\Request;

class CatelogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['catelogue'] = Catelogue::all();
        return view('backend.catelogue.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('backend.catelogue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $messages = [
        //     'name.required' => 'Naam koi ??',
        //     'name.min' => ' give more letter to your name',
        // ] ;

        // left side = input field | right side = rules 
        $validate =  $request->validate([
            'title' => 'required|min:3|max:50',
            'desc' => 'required|min:4|max:255',

        ]);

        // $filename = time(). '.' . $request->photo->extension() ;

      if ($validate) {
         // left side = db field | right side = input field
        $data = [
            'title' => $request->title ,
            'description' => $request->desc ,
        ] ;

        $model = new Catelogue();
        if( $model->insert($data) ){
            // $request->photo->move(public_path('images'), $filename);
            return redirect('/catelogue')->with('msg' , 'successfully inserted');
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
        // $product = Product::find($id);
        // $data2['cats'] = Category::all();
        // $data['product'] = $product ;
        // return view('backend.products.edit', compact('data', 'data2' )) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $product = Product::find($id) ;

        $messages = [
            'name.required' => 'Naam koi ??',
            'name.min' => ' give more letter to your name',
        ] ;


        $validate =  $request->validate([
            'name' => 'required|min:3|max:50',
            'desc' => 'required|min:4|max:255',
            'price' => 'required|numeric',
            'cats' => 'required',
        ],$messages);

        if ($validate){
            $data = [
                'name' => $request->name ,
                'description' => $request->desc ,
                'price' => $request->price ,
                'category_id' => $request->cats ,
            ] ;
            // print_r($data);
            // $product->update($data);
            return redirect('/product')->with('msg', 'data updated successfully') ;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $product = Product::find($id);
        // $product->delete();
        return redirect('/product')->with('msg_delete', 'khel Khotom');
    }
}
