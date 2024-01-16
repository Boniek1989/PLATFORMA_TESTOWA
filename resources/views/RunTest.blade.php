<x-layout>
    <body>

        <form id="QuizForm" action="przykladowy_skrypt.php" method="post">
            @php
                $calyWynik = 0;
            @endphp
        
            @foreach($records as $record)
                <div class="question_grid2">
                    {{ $record->question }}
        
                    @php
                        $poprawnaOdpowiedz = $record->TrueAnswer;
                        $falszyweOdpowiedzi = [
                            $record->FalseAnswer1,
                            $record->FalseAnswer2,
                            $record->FalseAnswer3,
                        ];
        
                        // Mieszanie odpowiedzi
                        $shuffledAnswers = collect([$poprawnaOdpowiedz, ...$falszyweOdpowiedzi])->shuffle()->all();
                    @endphp
        
                    <input type="hidden" name="poprawnaOdpowiedz_{{ $loop->index }}" value="{{ $poprawnaOdpowiedz }}">
                    
                    @foreach($shuffledAnswers as $key => $answer)
                        <label>
                            <input type="checkbox" name="options_{{ $loop->parent->index }}[]" value="{{ $answer }}">
                            {{ $answer }}
                        </label>
                    @endforeach
                </div>
            @endforeach
        
            <button type="button" onclick="sprawdzWynik()" class="question_grid2">Zakończ test</button>
        </form>
        
        <script>
            function sprawdzWynik() {
                var form = document.getElementById("QuizForm");
                var wynik = 0;
        
                form.querySelectorAll("input[name^='poprawnaOdpowiedz']").forEach(function(poprawnaOdpowiedzField, index) {
                    var zaznaczoneOdpowiedzi = Array.from(form.querySelectorAll("input[name^='options_" + index + "']:checked"))
                        .map(function(checkbox) {
                            return checkbox.value;
                        });
        
                    if (zaznaczoneOdpowiedzi.length === 1 && zaznaczoneOdpowiedzi[0] === poprawnaOdpowiedzField.value) {
                        wynik++;
                    }
                });
        
                alert("Twój wynik to: " + wynik + " punktów");
            }
        </script>
        
</x-layout>
