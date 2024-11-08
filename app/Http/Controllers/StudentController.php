<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class StudentController extends Controller
{
    public function index(){

        return Inertia::render('Login');

        // return view('backend.student.login');

    }

    public function create(){
        // return view('backend.student.register');
        return Inertia::render('Register');
    }

    public function store(Request $request){
        // $validate =  $request->validate([
        //     'name' => 'required|min:3|max:50',
        //     'desc' => 'required|min:4|max:255',
        //     'price' => 'required|numeric',
        //     'cats' => 'required',
        //     'photo' => 'mimes:jpg,jpeg,png',
        // ],$messages);

    //   if ($validate) {
         // left side = db field | right side = input field
        $data = [
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => Hash::make($request->password) ,
        ] ;

        $model = new Student();
        if( $model->insert($data) ){
            return redirect('/student/login') ;
        }
    //   }
    }


    public function login(Request $request ){
        // dd($request->all()) ;
        if(Auth::guard('student')->attempt(['email'=>$request->email,
        "password"=>$request->password])){
            return redirect('/')->with('loginMsg', 'SuccessFully Logged In') ;
        } else {
            return redirect()->route('student_login_form');
           

        }
    }

    public function myCourses()
    {
        $user = Auth::guard('student')->user() ?? '';
        $token = csrf_token();
        $userData = [
            'user' => $user,
            'token' => $token,
        ];
        $categories = Category::all();
        $student_id = Auth::guard('student')->user()->id;        
        $products = Order::where('student_id', $student_id)
        ->where('status', 1)
        ->get();
        return Inertia::render('MyCourses', compact('products', 'userData', 'categories'));
    }


    public function myorders()
    {
        $user = Auth::guard('student')->user() ?? '';
        $token = csrf_token();
        $userData = [
            'user' => $user,
            'token' => $token,
        ];
        $student_id = Auth::guard('student')->user()->id;
        // $product = Order::where('student_id', $student_id)->get();
        $orders = Order::where('student_id', $student_id)
        ->where('status', 1)
        ->get();
        return Inertia::render('MyOrders', compact('orders', 'userData'));
    }


    public function dashboard(){
        return view('backend.student.dashboard');
    }


    public function destroy ()
    {   
        Auth::guard('student')->logout();
        return redirect('/');
    }
}
