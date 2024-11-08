<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ReviewController extends Controller
{
    
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('backend.reviews.index', compact('reviews')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Review');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data  = [   'name' => $request->name,
                    'student_id'=>$request->student_id,
                    'occupation'=>$request->occupation,
                    'description'=>$request->description,
                    'rating'=>$request->rating,
    ];

        $model = new Review();
        if ( $model->insert($data) ){
            return redirect()->back()->with('msg' , 'Successfully Review added');
        }
    }


    /**
     * Display the specified resource.
     */

     public function myReview()
     {
        $user = Auth::guard('student')->user() ?? '';
        $token = csrf_token();
        $userData = [
            'user' => $user,
            'token' => $token,
        ];
        $student_id = Auth::guard('student')->user()->id;
        $myreview = Review::where('student_id', $student_id)->get();
        //  return view('frontend.review', compact('myreview')) ;
        return Inertia::render('Review', compact('myreview', 'userData'));
     }


    public function show(string $id)
    {
        //
    }


    public function status( Request $request,$id)
    {
        $review = Review::find($id);
        $data = [
            'status' => $request->status 
            ] ;
        $review->update($data);
        return redirect('/review')->with('msg', 'Status Updated') ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $data['cats'] = Category::find($id) ; 
        // return view('backend.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $category = Category::find($id);

        // $validate = $request->validate([
        //     'name' => 'required|min:4|max:255',
        //     // 'email' => 'email',
        // ] );

        // $data = [
        //     'name' => $request->name,
        // ];
        // // print_r($request);
        // $category->update($data);
        // return redirect('/category')->with('msg' , 'Your data has updated') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data = Review::find($id) ;
        $data->delete();
        return redirect('/review')->with('msg', 'Your data has been deleted');
    }
}
