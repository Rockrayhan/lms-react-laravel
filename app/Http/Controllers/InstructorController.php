<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Instructor;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    // login 
    public function index(){
        return view('backend.instructor.login');
    }

    public function create(){
        $cats = Category::all();
        $courses = Product::all();
        return view('backend.instructor.create', compact('cats', 'courses'));
    }


    public function store(Request $request)
    {
        // left side = input field | right side = rules 
        // $validate =  $request->validate([
        //     'name' => 'required|min:3|max:50',
        //     'desc' => 'required|min:4|max:255',
        //     'price' => 'required|numeric',
        //     'cats' => 'required',
        //     'photo' => 'mimes:jpg,jpeg,png',
        // ]);

        // $filename = time(). '.' . $request->photo->extension() ;

    //   if ($validate) {
         // left side = db field | right side = input field
        
        $data = [
            'name' => $request->name ,
            'email' => $request->email ,
            'password' => Hash::make($request->password) ,
            'category_id' => $request->cats ,
            'product_id' => $request->product ,
        ] ;
        // dd($data);

        $model = new Instructor();
        if( $model->insert($data) ){
            // $request->photo->move(public_path('images'), $filename);
            return redirect('/instructor')->with('msg' , 'successfully inserted');
        }
    //   }
    }


    // show all instructor
    public function show(){
        $instructors = Instructor::all();
        return view('backend.instructor.index' , compact('instructors'));
    }


    public function myCourses(){
        $instrutor_id = Auth::guard('instructor')->user()->id;
        $mycourses = Product::where('instructor_id', $instrutor_id)->get();
        return view('backend.instructor.mycourses', compact('mycourses'));
    }


    public function login(Request $request ){
        // dd($request->all()) ;
        if(Auth::guard('instructor')->attempt(['email'=>$request->email,
        "password"=>$request->password])){
            return redirect()->route('instructor.dashboard');
        } else {
            return redirect()->route('instructor_login_form');
        }
    }


    public function dashboard(){
        return view('backend.instructor.dashboard');
    }


    public function destroy (Request $request)
    {
        
        Auth::guard('instructor')->logout();
        

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('instructor/login');
    }
}
