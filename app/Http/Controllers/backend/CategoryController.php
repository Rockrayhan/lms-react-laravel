<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Category::all();
        return view('backend.category.index', compact('cats')) ;
    
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data  = ['name' => $request->name];

        $model = new Category();
        if ( $model->insert($data) ){
            return redirect('category')->with('msg' , 'Successfully category added');
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
        $data['cats'] = Category::find($id) ; 
        return view('backend.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

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
        $data = Category::find($id) ;
        $data->delete();
        return redirect('/category')->with('msg', 'Your data has been deleted');
    }
}
