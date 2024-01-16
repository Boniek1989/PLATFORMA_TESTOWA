<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AGQuestions;

class AdminController extends Controller
{
    public function AdminControl(Request $request)
    {
        $adminUsername = 'admin'; 
        $adminPassword = 'admin123'; 

        $inputUsername = $request->input('AdminUser');
        $inputPassword = $request->input('AdminPassword');

        if ($inputUsername === $adminUsername && $inputPassword === $adminPassword) {
           
            return view("Admin");   
        } else {
            return 'Błąd logowania.';
        }
    }

    public function ShowAll()
    {
        $records = AGQuestions::all();
        return view('ShowAll')->with('records', $records)->with('message', 'Operacja zakończona sukcesem');  
    }

    public function AddQuizQuest(Request $request)
    {
    
    $validatedData = $request->validate([
        'Question' => 'required|string',
        'TrueAnswer' => 'required|string',
        'FalseAnswer1' => 'required|string',
        'FalseAnswer2' => 'required|string',
        'FalseAnswer3' => 'required|string',
    ]);

    
    $model = new AGQuestions();
    $model->question = $request->input('Question');
    $model->TrueAnswer = $request->input('TrueAnswer');
    $model->FalseAnswer1 = $request->input('FalseAnswer1');
    $model->FalseAnswer2 = $request->input('FalseAnswer2');
    $model->FalseAnswer3 = $request->input('FalseAnswer3');
    $model->created_at = now();
    $model->updated_at = now();
    $model->save();
    return view("Admin")->with('message','Operacja zakończona sukcesem');
    }

    public function edit($id)
    {
        $record = AGQuestions::find($id);
        return view ('/edit', compact('record'));
        
    }

    public function update(Request $request, $id)
    {
        $record = AGQuestions::find($id);
        $record->question = $request->input('question');
        $record->TrueAnswer = $request->input('TrueAnswer');
        $record->FalseAnswer1 = $request->input('FalseAnswer1');
        $record->FalseAnswer2 = $request->input('FalseAnswer2');
        $record->FalseAnswer3 = $request->input('FalseAnswer3');
        $record->created_at = now();
        $record->updated_at = now();
        $record->update();
        return view('Admin')->with('message','Zapis zauktalizowany');
    }
    public function destroy($id)
    {
        $record=AGQuestions::find($id);
        $record->delete();
        return view('Admin')->with('message','Rekord usunuięty z bazy danych');
    }
    public function TestRun()
    {
        $records=AGQuestions::all();
        return view('RunTest')->with('records', $records)->with('message', 'Operacja zakończona sukcesem');  
    }
}