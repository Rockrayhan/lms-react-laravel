<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('backend.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Order::all();        
        return view('frontend.productDetails', compact('cats'));
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
        // $validate =  $request->validate([
        //     'name' => 'required|min:3|max:50',
        // ]);


    //   if ($validate) {
         // left side = db field | right side = input field
        $data = [
            'student_name' => $request->student_name ,
            'phone' => $request->phone ,
            'email' => $request->email ,
            'product_name' => $request->product_name ,
            'student_id' => $request->student_id ,
            'product_id' => $request->product_id ,
            'price' => $request->price ,
            'payment' => $request->payment ,
            't_id' => $request->t_id ,
        ] ;
        // dd($data);

        $model = new Order();
        if( $model->insert($data)){
            return redirect('all-courses')->with('EnrollMsg' , 'successfully Enrolled. Your Courses Will be available soon');
        }
    //   }
    }

    public function status( Request $request,$id)
    {
        $review = Order::find($id);
        $data = [
            'status' => $request->status 
            ] ;
        $review->update($data);
        return back()->with('msg', 'Status Updated') ;
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
            // $product->update($data);
            $request->photo->move(public_path('images'), $filename);
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
        // return redirect('/product')->with('msg_delete', 'khel Khotom');
    }
}
