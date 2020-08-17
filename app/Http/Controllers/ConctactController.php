<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConctactController extends Controller
{
    public function store(){
    $message = request()->validate([
    		'name'=>'required',
    		'email'=>'required | email',
    		'subject'=>'required',
    		'content'=>'required|min:4'
    	],[
           'name.required'=>'necesito tu nombre'
    	]);

    Mail::to('pernettleonardo@gmail.com')->send(new Message($message));

        return back()->with('flash','recibimos tu mensaje, respoderemos en menos 24 horas gracias');
    }
}
