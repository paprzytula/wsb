<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(\App\Questionnaire $questionnaire)
       {
        return view('question.create', compact('questionnaire'));
       }
}
