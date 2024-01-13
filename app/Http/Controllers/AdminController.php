<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AGQuestions;

class AdminController extends Controller
{
    public function Admin()
    {
        return view('TestAdmin');
    }
    public function AdminControl(Request $request)
    {
        $adminUsername = 'admin'; // Ustawienia admina
        $adminPassword = 'admin123'; // Ustawienia hasła admina

        $inputUsername = $request->input('AdminUser');
        $inputPassword = $request->input('AdminPassword');

        if ($inputUsername === $adminUsername && $inputPassword === $adminPassword) {
            // Hasło administratora poprawne, możesz tu umieścić kod do wykonania po poprawnej autentykacji
        $questions = AGQuestions::all();         
        return view('Admin', compact('questions'));
           
        } else {
            // Hasło administratora niepoprawne
            return 'Błąd logowania.';
        }
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

        return view('Admin')->with('message', 'Operacja zakończona sukcesem');

    }
    
}
