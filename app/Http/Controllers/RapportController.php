<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRapportRequest;
use App\Http\Requests\UpdateRapportRequest;

class RapportController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:rapportlimiter')->only('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rapport =new Rapport;
        $rapport =  $rapport::paginate(6);
        return view('rapports', compact('rapport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRapportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRapportRequest $request)
    {
        $rapport = new Rapport();

        $rapport->title = $request->input('title');
        $rapport->filiere = $request->input('filiere');
        $rapport->versionpdf = $request->input('versionpdf');
        $rapport->desc = $request->input('desc');
        $rapport->etudiant = $request->input('etudiant');
        $rapport->typerapport= $request->input('typerapport');
        $rapport->date = $request->input('date');
        
        if($request->hasFile('versionpdf')){
            $file = $request->file('versionpdf');
            $extesion= $file->getClientOriginalExtension();
            $filename = time().'.'.$extesion;
            $file->move('storage/', $filename);
            $rapport->versionpdf = $filename;
        }
        $rapport->user_id = auth()->id();

        $rapport->save();
        session()->flash('success','Le rapport a été bien enregistré');
        return redirect('Rapport');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rapport  $rapport
     * @return \Illuminate\Http\Response
     */
    public function show(Rapport $rapport,$id)
    {
        $rapport = Rapport::find($id);
        return view('rapport.viewrapport',compact('rapport'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rapport  $rapport
     * @return \Illuminate\Http\Response
     */
    public function edit(Rapport $rapport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRapportRequest  $request
     * @param  \App\Models\Rapport  $rapport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRapportRequest $request, Rapport $rapport)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rapport  $rapport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rapport $rapport,$id)
    {
        $rapport = Rapport::find($id);
        if ($rapport->user_id != auth()->id()) {
            abort(403,'Unothorized');
        }
        
            $file = $rapport->versionpdf;
            $path = public_path('storage/'.$file);
            unlink($path);
       
        $rapport->delete();
        return redirect()->back();
    }
}
