<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\AgQuestions;

class StudentController extends Controller
{
   public function Create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            
        ]);
    $model = new Student();
    $model->name = $request->input('name');
    $model->points =$request-> input('user_score');
    $model->created_at = now();
    $model->updated_at = now();
    $model->save();
    return view("/index");
    }

    public function ShowAll()
    {
        $records = Student::all();
        return view('ScoreList')->with('records', $records);
    }
    }

