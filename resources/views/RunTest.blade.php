<x-layout>
    <body>

        <form id="QuizForm"  method="post">
            @php
                $totalScore = 0;
            @endphp
        
            @foreach($records as $record)
                <div class="question_grid2">
                    {{ $record->question }}
        
                    @php
                        $correctAnswer = $record->TrueAnswer;
                        $incorrectAnswers = [
                            $record->FalseAnswer1,
                            $record->FalseAnswer2,
                            $record->FalseAnswer3,
                        ];        
                        
                        $shuffledAnswers = collect([$correctAnswer, ...$incorrectAnswers])->shuffle()->all();
                    @endphp
        
                    <input type="hidden" name="correctAnswer_{{ $loop->index }}" value="{{ $correctAnswer }}">
                    
                    @foreach($shuffledAnswers as $key => $answer)
                        <label>
                            <input type="checkbox" name="selectedAnswers_{{ $loop->parent->index }}[]" value="{{ $answer }}">
                            {{ $answer }}
                        </label>
                    @endforeach
                </div>
            @endforeach
        </form>
        
        <form id="scoreForm" action="/create_score" method="post" class="question_grid2">
            @csrf
        
            <label for="name">Nazwa uczestnika:</label>
            <input type="text" id="name" name="name" required>
        
            
            <input type="hidden" id="user_score" name="user_score">
        
            <button type="button", onclick="calculateScore()">Sprawdź wynik</button>
            <button type="submit">Zakończ test</button>
        </form>
        
        <script>
            function calculateScore() { 
                var form = document.getElementById("QuizForm");
                var totalScore = 0;
        
                form.querySelectorAll("input[name^='correctAnswer']").forEach(function(correctAnswerField, index) {
                    var selectedAnswers = Array.from(form.querySelectorAll("input[name='selectedAnswers_" + index + "[]']:checked"))
                        .map(function(checkbox) {
                            return checkbox.value;
                        });
        
                    if (selectedAnswers.length === 1 && selectedAnswers[0] === correctAnswerField.value) {
                        totalScore++;
                    }
                });
        
                var userScore = totalScore; 
        
               
                document.getElementById("user_score").value = userScore;
                       
            }
        </script>
        
</x-layout>
