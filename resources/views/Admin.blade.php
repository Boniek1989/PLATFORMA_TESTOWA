<x-layout>
@csrf
  <div>
 @if(isset($message))
  <p>{{ $message }}</p>
 @endif
 <h2>Pytania w bazie danych:</h2>

        @foreach($questions as $question)
            <p>{{ $question->Question }}</p>
            <!-- Dodaj inne pola pytania, które chcesz wyświetlić -->
        @endforeach

    <a href="{{url('/add_quest')}}"><button class="AddQuest">Dodaj pytanie</button></a>
      <a href="{{url('/edit_quest')}}"><button class="AddQuest">Edytuj pytanie</button></a>
      
        <button class="DoTest"> Usuń pytanie</button>
          <button class="DoTest"> Wyświetl wszystkie pytania</button>
            <button class="DoTest"> Lista wyników testu </button>
              <a href="{{url('/index')}}"><button class="DoTest"> Wróć do strony głównej </button>

  </div>
	
    
 
</x-layout>