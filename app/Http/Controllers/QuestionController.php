<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', ['questions' => $questions]);
    }


    public function selfIndex(){
        $questions = Question::where('user_id', Auth::id())->get();
        return view('questions.selfIndex', ['questions' => $questions]);


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question();

        $question->title = request('title');
        $question->description= request('description');
        $question->user_id = Auth::id();

        $question->save();

        return redirect('/questions');
    }


    public function show(Question $id)
    {

        $responses = Response::where('question_id', $id->id)->get();
        return view('questions.show')->with('question',$id)->with('responses',$responses);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect('/questions');
    }
}

