<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class QuizquestionsradController extends Controller
{
    public function Quizindex()
    {
        $questions = Question::inRandomOrder()->take(5)->get(); 
        return view('Quizquestionsfordrivers.quizquesions', compact('questions'));
    }

    public function submitQuiz(Request $request)
    {
        $score = 0; 
        $answers = $request->input('answers');
        foreach ($answers as $questionId => $answer) {
            $question = Question::find($questionId);
            if ($question && $question->correct_answer === $answer) {
                $score++;
            }
        }

        Result::create([
            'user_id' => Auth::id(),
            'score' => $score
        ]);

        return redirect()->route('results')->with('score', $score);
    }

    public function showResults()
    {
        $score = session('score');
        return view('Quizquestionsfordrivers.results', compact('score'));
    }
}
