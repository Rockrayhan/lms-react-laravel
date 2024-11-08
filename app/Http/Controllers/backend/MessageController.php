<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\Message;
use App\Models\Student;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $msg = Message::all();
        return view('backend.message.index', compact('msg')) ;
    }


    public function create(){
        $instructor = Instructor::all();
        $student = Student::all();
        return view('backend.message.create', compact('instructor','student')) ;
    }


    public function store(Request $request){
        $data  = [
        'instructor_id' => $request->instructor ,
        'student_id' => $request->student ,
        'msg' => $request->msg ,
    ];

        $model = new Message();
        if ( $model->insert($data) ){
            return redirect()->back()->with('msg' , 'Message Send');
        }
    }
}
