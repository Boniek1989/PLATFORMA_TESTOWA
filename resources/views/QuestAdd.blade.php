<x-layout>
@csrf
<div>
 
 <form method= "post" action="/question_add">
    @csrf
 <label for="QuestionTag">Pytanie:</label>
 <input type="text" id="Question" name="Question"><br><br>
 <label for="TrueAnswerTag">Odpowiedź poprawna:</label>
 <input type="text" id="TrueAnswer" name="TrueAnswer"><br><br>
 <label for="FalseAnswerTag1">Odpowiedź fałszywa:</label>
 <input type="text" id="FalseAnswer1" name="FalseAnswer1"><br><br>
 <label for="FalseAnswerTag2">Odpowiedź fałszywa:</label>
 <input type="text" id="FalseAnswer2" name="FalseAnswer2"><br><br>
 <label for="FalseAnswerTag3">Odpowiedź fałszywa:</label>
 <input type="text" id="FalseAnswer3" name="FalseAnswer3"><br><br>
 <input type="submit" value="Zatwierdź">
 </form>
 </div>
	
    
  </div>
</x-layout>