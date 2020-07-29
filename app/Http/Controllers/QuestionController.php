<?php
/**
 * Created by PhpStorm.
 * User: John Paini
 * Date: 19/08/2016
 * Time: 21:22
 */


namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Proofs;
use App\Models\Question;
use Illuminate\Http\Request;


class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        return view('profile');
    }
    public function getQuestions(){
        $questions = Question::all();

        return view('questions.list', ['questions' => $questions]);
    }

    public function createQuestion(){
        return view('questions.create');
    }
    public function create(array $data)
    {
        dd(Question::create([
            'descricao' => $data['descricao'],
            'tipo' => $data['tipo'],
            'peso' => $data['peso'],
            'imagem' => $data['imagem'],
            'user_id' => $data['user_id']
            //'descricao', 'tipo', 'peso', 'imagem', 'user_id'
        ]));
        return Redirect::to('/questions/list');
    }
}
