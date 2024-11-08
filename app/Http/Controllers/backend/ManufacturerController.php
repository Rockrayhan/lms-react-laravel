<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cats'] = Manufacturer::all();
        return view('backend.Manufacturers.index', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Manufacturers.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data  = [
            'name' => $request->name,
            'country' => $request->country
    
    ];

        $model = new Manufacturer();
        if ( $model->insert($data) ){
            return redirect('/manufacturer')->with('msg' , 'Successfully manufacturer added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['cats'] = Manufacturer::find($id) ; 
        return view('backend.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Manufacturer::find($id);

        $validate = $request->validate([
            'name' => 'required|min:4|max:255',
            // 'email' => 'email',
        ] );

        $data = [
            'name' => $request->name,
        ];
        // print_r($request);
        $category->update($data);
        return redirect('/category')->with('msg' , 'Your data has updated') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data = Manufacturer::find($id) ;
        $data->delete();
        return redirect('/category')->with('msg', 'Your data has been deleted');
    }
}
