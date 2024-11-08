<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $student_id = Auth::guard('student')->user()->id ?? '';
        $ordered = Order::where('student_id', $student_id)->where('product_id', $id)->where('status' , 1)->first();
        $pending = Order::where('student_id', $student_id)->where('product_id', $id)->where('status' , 0)->first();
        $products = Product::find($id);
        $products->load('lesson');
        $quiz = Quiz::all();
        $quiz = $products->quiz;
        $user = Auth::guard('student')->user() ?? '';
        $token = csrf_token();
        $userData = [
            'user' => $user,
            'token' => $token,
        ];

        $enrolledCount = Order::where('product_id', $id)
        ->where('status', 1) // Assuming 1 is for confirmed orders
        ->count();
        // return view('frontend.productDetails', compact('products', 'ordered', 'quiz'));
        return Inertia::render('ProductDetails', 
        [
            'products' => $products,
            'ordered' => $ordered,
            'pending' => $pending,
            'userData' => $userData,
            'enrolledCount' => $enrolledCount,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
