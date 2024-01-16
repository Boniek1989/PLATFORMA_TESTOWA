<x-layout>
    

    <div>
        <form  action="{{ url('update_question/'.$record->id) }}" method="POST" class="header_menu_index">
          @csrf
          @method('put')
        <label for="question">Pytanie:</label>
        <input type="text" name="question" value="{{ $record->question }}" required><br><br>
        <label for="TrueAnswerTag">Odpowiedź poprawna:</label>
        <input type="text" name="TrueAnswer" value="{{ $record->TrueAnswer }}" required><br><br>
        <label for="FalseAnswerTag1">Odpowiedź fałszywa:</label>
        <input type="text" name="FalseAnswer1" value="{{ $record->FalseAnswer1 }}" required><br><br>
        <label for="FalseAnswerTag2">Odpowiedź fałszywa:</label>
        <input type="text" name="FalseAnswer2" value="{{ $record->FalseAnswer2 }}" required><br><br>
        <label for="FalseAnswerTag3">Odpowiedź fałszywa:</label>
        <input type="text" name="FalseAnswer3" value="{{ $record->FalseAnswer3 }}" required><br><br>
        <input type="submit" value="Edytuj" class="button_fixed">
        <span><a href="{{ url('/exit_edit') }}" class="button_fixed" >Wyjdź</a></span>
        </form> 
        <form class="footer_menu3_index" action="{{ url('/delete/'.$record->id) }}" method="post">
          @csrf
          @method('DELETE')
          
          <button type="submit" class="button_fixed" onclick="return confirm('Czy na pewno chcesz usunąć to pytanie?')">Usuń pytanie</button>
      </form>

        <div class="green_light">
        @if(isset($message))
         {{ $message }}
        @endif
       </div>
   

</x-layout>