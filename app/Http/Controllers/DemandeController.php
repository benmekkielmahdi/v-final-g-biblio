<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Auth ;
class DemandeController extends Controller
{

    public function index()
    {
        $demandes = new Demande;
        $demandes =  $demandes::all();
       
        return view('admin.demande.index', compact('demandes'));
    
    }

    public function mesdemandes()
    {
        $userId = Auth::id();
        $demandes = new Demande;
        $demandes =  $demandes::where('user_id', $userId)->get();
       
        return view('mesdemandes', compact('demandes'));
    
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        $new = Demande::updateOrCreate([
        'oeuvre_id' => $request->input('oeuvre_id'),
        'user_id' => $userId,
        
        
    ]);
    return redirect()->back();
    
    }

}
