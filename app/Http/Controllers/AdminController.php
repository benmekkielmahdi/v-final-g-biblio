<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $books= Book::all();
        return view('admin.admin',compact('books'));
    }


    public function demandes(){
        $demandes= Demande::all();
        return view('admin.admin',compact('demandes'));
    }

    
}
