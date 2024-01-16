<x-layout>
@csrf
<a href="{{url('/show_all')}}" class=admin_menu_index>Pokaż pytania w bazie danych
</a> 

<div class="green_light">
 @if(isset($message))
  {{ $message }}
 @endif
</div>
 


<div class="footer_menu3_index">
  <span class="footer_value_index" onclick="openAddQuest();">Dodaj pytanie</span>
  <a href="{{url('/')}}" class="footer_value_index"> Wróć na główną </a>
</div>       
  
<div class="topnav" id="QuestAdd">
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
  <input type="submit" value="Zatwierdź" class="button_fixed">
  <span onclick="closeAddQuest();" class="button_fixed">Wyjdź</span>
  </form> 
  </div>
  
<script>
function openAddQuest()
{
  document.getElementById("QuestAdd").style.width = "100%";
  document.getElementById("QuestAdd").style.height = "100%";
} 
function closeAddQuest()
{
  document.getElementById("QuestAdd").style.width = "0%";
  document.getElementById("QuestAdd").style.height = "0%"; 
 } 
</script>    
 
</x-layout>