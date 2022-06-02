<?php

namespace App\Http\Controllers;
use Auth ;
use App\Models\Book;
use App\Models\Oeuvre;
use App\Models\Category;
use Illuminate\Http\Request;

class LivreController extends Controller
{

    public function index(Request $request)
    {
        /*
         $books= Book::paginate(3);
         $categories = Category::where('is_online',1)->get();

         return view('books', compact('books','categories'));
         */
        $oeuvre= Oeuvre::where('category_id', $request->id)->paginate(12);
        $categories= Category::all();
         $oeuvre =new Oeuvre;
        $oeuvre =  $oeuvre::paginate(12);
         return view('books', compact('oeuvre','categories'));
    }

    public function viewByCategory(Request $request){
  
        $oeuvre= Oeuvre::where('category_id', $request->id)->paginate(12);
        $categories= Category::all();
         
        return view('books', compact('oeuvre','categories'));
        
    }
    public function bookdetails(Request $request){

        $oeuvre= Oeuvre::find($request->id);
        return view('bookdetails', compact('oeuvre'));
    }

/*
    public function bookdetails(Request $request){

        $book= Book::find($request->id);
        return view('bookdetails', compact('book'));
    }
   
    public function viewByCategory(Request $request){

        $books= Book::where('category_id', $request->id)->paginate(3);
       $categories= Category::all();
         return view('books', compact('books','categories'));
    }
*/

    
}


