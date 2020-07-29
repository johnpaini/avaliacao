<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Proof;
use App\Models\Proofs;
use Illuminate\Http\Request;


class ProofController extends Controller
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
	public function getProofs(){
		$proofs= Proofs::all();
		return view('proofs.list', ['proofs' => $proofs]);
	}
    public function create(array $data)
    {
        return Proofs::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
