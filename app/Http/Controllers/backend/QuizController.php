<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Quiz;
use App\Models\QuizAnswer;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quiz = Quiz::all();
        return view('backend.quiz.index', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Product::all();
        return view('backend.quiz.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'question' => $request->question ,
            'option1' => $request->option1 ,
            'option2' => $request->option2 ,
            'option3' => $request->option3 ,
            'option4' => $request->option4,
            'marks' => $request->marks,
            'product_id' => $request->course,
            'correct_answer' => $request->correct_answer,
        ] ;

        $model = new Quiz();
        if( $model->insert($data) ){
            return redirect()->back()->with('msg' , 'successfully inserted');
        }
    }


  
public function submitQuiz(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'student_id' => 'required|exists:students,id',
        'answers' => 'required|array',
        'answers.*' => 'required|in:option1,option2,option3,option4', // Validate each answer option
    ]);

 
    // Process each submitted answer and store it in the database
    foreach ($request->answers as $questionNumber => $selectedOption) {
        QuizAnswer::create([
            'student_id' => $request->student_id,
            'question_number' => $questionNumber,
            'selected_option' => $selectedOption,
        ]);
    }

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Quiz submitted successfully!');
}





}
