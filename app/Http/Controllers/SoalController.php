<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SoalController extends Controller
{
    public function show($questionNumber, $cat_id)
    {
        $questions = Session::get('quiz_questions');

        if (empty($questions) || $questionNumber <= 0 || $questionNumber > count($questions)) {
            // Tindakan yang sesuai jika array kosong atau nomor pertanyaan tidak valid
            return redirect()->back()->with('error', 'Invalid question number');
        }

        $question = $questions[$questionNumber - 1];
        $totalQuestions = count($questions);

        if ($cat_id == 2) {
            return view('exercise.soal', compact('question', 'questionNumber', 'totalQuestions'));
        }

        return view('exercise.wh', compact('question', 'questionNumber', 'totalQuestions'));
    }

    public function start(Request $request)
    {
       $cat_id = $request->cat_id;
        $questions = Quiz::where('category_id',$cat_id)->inRandomOrder()->limit(5)->get();
        Session::put('quiz_questions', $questions);
        return redirect()->route('soal.show', [1,$cat_id]);
    }


    public function answer(Request $request, $questionNumber, $id)
{
    $cat_id = Quiz::where('id', $id)->first()->category_id;
    $correct_answer = Quiz::where('id', $id)->first()->jawaban;
    $answers = $request->answers;

    if ($answers == $correct_answer) {
        $answers = true;
    } else {
        $answers = false;
    }

    $questions = Session::get('quiz_questions');
    $question = $questions[$questionNumber - 1];

    // Simpan jawaban pengguna ke model Jawaban (Answer)
    $id = $request->session()->get('id');
    Jawaban::create([
        'user_id' => $id,
        'kuis' => $question->id,
        'total' => $answers,
    ]);

    if ($questionNumber >= count($questions)) {
        return redirect()->route('soal.result');
    } else {
        return redirect()->route('soal.show', [$questionNumber + 1, $cat_id]);
    }
}



    public function result()
    {
        $id = Session::get('id');
        $user = User::where('id', $id)->first();
        $hasil = Jawaban::where(['user_id' => $id, 'total' => 1])->get();
        $total = $hasil->sum('total');
        if($total == 1){
            $hasil = 20;
        }else if($total == 2){
            $hasil = 40;
        }else if($total == 3){
            $hasil = 60;
        }else if($total == 4){
            $hasil = 80;
        }elseif($total == 5){
            $hasil = 100;
        }else{
            $hasil = 0;
        }
        return view('score', compact('hasil','user'));
    }
    public function logout(){
        Session::forget('id');
        return view('user');
    }
}
