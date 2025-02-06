<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @extends('layouts.app')
    @section('content')
        <div class="container">
            <h2>Cuestionario de Bases de Datos</h2>
            <form method="POST" action="{{ route('quiz.submit') }}">
                @csrf
                @foreach($questions as $question)
                    <div class="mb-3">
                        <p>{{ $question->question }}</p>
                        <input type="radio" name="question_{{ $question->id }}" value="A"> {{ $question->option_a }}<br>
                        <input type="radio" name="question_{{ $question->id }}" value="B"> {{ $question->option_b }}<br>
                        <input type="radio" name="question_{{ $question->id }}" value="C"> {{ $question->option_c }}<br>
                        <input type="radio" name="question_{{ $question->id }}" value="D"> {{ $question->option_d }}<br>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
    
            @if(isset($correct) && isset($wrong))
                <h3>Resultados</h3>
                <p>Respuestas correctas: {{ $correct }}</p>
                <p>Respuestas incorrectas: {{ $wrong }}</p>
                @foreach($feedback as $id => $data)
                    <p><strong>Pregunta:</strong> {{ $data['question'] }}</p>
                    <p><strong>Respuesta correcta:</strong> {{ $data['correct_answer'] }}</p>
                @endforeach
            @endif
        </div>
    @endsection
</body>
</html>