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
    $model->points = 0;
    $model->created_at = now();
    $model->updated_at = now();
    $model->save();
    return view("test")->with('message','Operacja zakończona sukcesem');
    }
    }

