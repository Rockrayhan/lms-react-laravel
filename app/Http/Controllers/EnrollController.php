<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class EnrollController extends Controller
{
    public function index($id)
    {
        $products = Product::find($id);
        $user = Auth::guard('student')->user();
        $token = csrf_token();
        $userData = [
            'user' => $user,
            'token' => $token,
        ];
        $student_id = Auth::guard('student')->user()->id ?? '';
        $ordered = Order::where('student_id', $student_id)->where('product_id', $id)->where('status', 1)->first();
        $pending = Order::where('student_id', $student_id)->where('product_id', $id)->where('status', 0)->first();
        // return view('frontend.productDetails', compact('products', 'ordered', 'quiz'));
        return Inertia::render(
            'Enroll',
            [
                'products' => $products,
                'userData' => $userData,
                'ordered' => $ordered,
                'pending' => $pending,
            ]
        );
    }
}
