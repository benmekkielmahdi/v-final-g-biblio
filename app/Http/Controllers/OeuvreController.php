<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Oeuvre;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreOeuvreRequest;
use App\Http\Requests\UpdateOeuvreRequest;

class OeuvreController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oeuvre =new Oeuvre;
        $oeuvre =  $oeuvre::all();
       // return $oeuvre;
       //return view('admin.admin')->with('oeuvre', $oeuvre);
        return view('admin.index', compact('oeuvre'));
      
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('admin.operations.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOeuvreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOeuvreRequest $request)
    {
      
        $ouvrage = new Oeuvre;
        
        $ouvrage->titre = $request->input('titre');
        $ouvrage->auteur = $request->input('auteur');
        $ouvrage->annee = $request->input('annee');
        $ouvrage->description = $request->input('description');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extesion= $file->getClientOriginalExtension();
            $filename = time().'.'.$extesion;
            $file->move('storage/', $filename);
            $ouvrage->image = $filename;
        }

        $ouvrage->category_id = $request->input('category_id');
        $ouvrage->qt = $request->input('qt');
        $ouvrage->save();
        session()->flash('success','Le Livre a été bien enregistré');
        return redirect('Oeuvre/create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oeuvre  $oeuvre
     * @return \Illuminate\Http\Response
     */
    public function show(Oeuvre $oeuvre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oeuvre  $oeuvre
     * @return \Illuminate\Http\Response
     */
    public function edit(Oeuvre $Oeuvre) 
    { 
        $categories= Category::all();
        return view('admin.operations.edit', compact('Oeuvre','categories'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOeuvreRequest  $request
     * @param  \App\Models\Oeuvre  $oeuvre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOeuvreRequest $request, Oeuvre $Oeuvre)
    {
        $data = $request->validate([
            'titre'=>'required',
            'auteur'=>'required',
            'annee'=>'required',
            'image'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'qt'=>'required',
         
        ]);
     
        if($request->hasFile('image')){
            if($Oeuvre->image){
                Storage::delete($Oeuvre->image);

            }
            $file = $request->file('image');
            $extesion= $file->getClientOriginalExtension();
            $filename = time().'.'.$extesion;
            $file->move('storage/', $filename);
            $Oeuvre->image = $filename;
        }
   

        $Oeuvre->titre = $data['titre'];
        $Oeuvre->auteur = $data['auteur'];
        $Oeuvre->annee = $data['annee'];
        $Oeuvre->description = $data['description'];
        $Oeuvre->category_id = $data['category_id'];
        $Oeuvre->qt = $data['qt'];
    
        $Oeuvre->save();
        return redirect('Oeuvre')->with('message','updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oeuvre  $oeuvre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oeuvre $oeuvre,$id)
    {  
        $oeuvre = Oeuvre::find($id);
        $file = $oeuvre->image;
        $path = public_path('storage/'.$file);
        unlink($path);
       $oeuvre->delete();
       return redirect()->back();
    }
}
