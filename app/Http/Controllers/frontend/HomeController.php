<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Review;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $manufacturers = Manufacturer::all();
        $products = Product::all();
        $reviews = Review::where('status', 1)->get();
        $categories = Category::all();
        $students = Student::all();
        // $checkUser = Auth::guard('student')->check();
        $user = Auth::guard('student')->user() ?? '';
        $token = csrf_token();
        $userData = [
            'user' => $user,
            'token' => $token,
        ];
        $loginMsg = session('loginMsg');
        return Inertia::render('Home', 
        [
            'manufacturers' => $manufacturers,
            'products' => $products,
            'reviews' => $reviews,
            'categories' => $categories,
            'students' => $students,
            'students' => $students,
            'userData' => $userData,
            'loginMsg' => $loginMsg,

        ]);
    }
    

    public function about()
    {
        $user = Auth::guard('student')->user() ?? '';
        $token = csrf_token();
        $userData = [
            'user' => $user,
            'token' => $token,
        ];
        return Inertia::render('About', compact('userData'));
    
    }



    public function allcourses()

    {  
        $user = Auth::guard('student')->user() ?? '';
        $token = csrf_token();
        $userData = [
            'user' => $user,
            'token' => $token,
        ];
        $enrollMsg = session('EnrollMsg');
        $products = Product::all();
        $categories = Category::all();
        // return view('frontend.AllCourses', compact('products'));
        return Inertia::render('AllCourses' , compact('userData' ,'products', 'categories', 'enrollMsg' ));
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
