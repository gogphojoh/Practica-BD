<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuestionario de Bases de Datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        /* Fondo con gradiente */
        body {
            background: linear-gradient(to right, #f5f7fa, #c3cfe2);
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #0d6efd;
        }
        /* Estilo para las preguntas */
        .question-box {
            background-color: #e9f7f6;
            border: 1px solid #b2ebf2;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
        }
        .form-check-label {
            font-size: 16px;
            margin-left: 8px;
        }
        /* Efecto hover en opciones */
        .form-check-input {
            cursor: pointer;
        }
        .form-check-input:checked + .form-check-label {
            color: #fff;
            background-color: #0d6efd;
            padding: 5px 10px;
            border-radius: 6px;
        }
        .form-check-input:hover + .form-check-label {
            background-color: #f1f1f1;
            border-radius: 6px;
        }
        /* Estilo del botón */
        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #0d6efd;
            color: #fff;
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #0b5ed7;
            transform: scale(1.02);
        }
        /* Caja de resultados */
        .result-box {
            background-color: #f1f8e9;
            padding: 20px;
            border-left: 4px solid #4caf50;
            margin-top: 20px;
            border-radius: 8px;
        }
        .incorrect-box {
            background-color: #ffebee;
            border-left: 4px solid #f44336;
        }
        /* Divisor */
        hr {
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>

    @extends('layouts.app')
    @section('content')
        <div class="container">
            <h2>📚 Cuestionario de Expresión Oral 📚</h2>
            <form method="POST" action="{{ route('quiz.submit') }}">
                @csrf
                @foreach($questions as $question)
                    <div class="question-box">
                        <p><strong>{{ $question->question }}</strong></p>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="question_{{ $question->id }}" value="A" id="optionA_{{ $question->id }}">
                            <label class="form-check-label" for="optionA_{{ $question->id }}">{{ $question->option_a }}</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="question_{{ $question->id }}" value="B" id="optionB_{{ $question->id }}">
                            <label class="form-check-label" for="optionB_{{ $question->id }}">{{ $question->option_b }}</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="question_{{ $question->id }}" value="C" id="optionC_{{ $question->id }}">
                            <label class="form-check-label" for="optionC_{{ $question->id }}">{{ $question->option_c }}</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="question_{{ $question->id }}" value="D" id="optionD_{{ $question->id }}">
                            <label class="form-check-label" for="optionD_{{ $question->id }}">{{ $question->option_d }}</label>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary mt-3">✅ Enviar Respuestas</button>
            </form>
    
            @if(isset($correct) && isset($wrong))
                <div class="result-box">
                    <h3>📊 Resultados</h3>
                    <p><strong>✅ Respuestas correctas:</strong> {{ $correct }}</p>
                    <p><strong>❌ Respuestas incorrectas:</strong> {{ $wrong }}</p>
                    <hr>
                    @foreach($feedback as $id => $data)
                        <div class="{{ isset($data['is_correct']) && $data['is_correct'] ? 'result-box' : 'incorrect-box' }}">
                            <p><strong>📝 Pregunta:</strong> {{ $data['question'] }}</p>
                            <p><strong>✔️ Respuesta correcta:</strong> {{ $data['correct_answer'] }}</p>
                        </div>
                        <hr>
                    @endforeach
                </div>
            @endif
        </div>
    @endsection

</body>
</html>
