<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller {
    public function showQuiz() {
        $questions = Question::all();
        return view('quiz', compact('questions'));
    }

    public function evaluateQuiz(Request $request) {
        $questions = Question::all();
        $correct = 0;
        $wrong = 0;
        $feedback = [];
        
        foreach ($questions as $question) {
            $userAnswer = $request->input('question_' . $question->id);
            if ($userAnswer === $question->correct_option) {
                $correct++;
            } else {
                $wrong++;
                $feedback[$question->id] = [
                    'question' => $question->question,
                    'correct_answer' => $question->{'option_' . strtolower($question->correct_option)}
                ];
            }
        }
        
        return view('quiz', compact('questions', 'correct', 'wrong', 'feedback'));
    }
}