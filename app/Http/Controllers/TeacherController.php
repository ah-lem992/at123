<?php

namespace App\Http\Controllers;

use App\Prof;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
     //liste des prof
    public function index(){
       //index de prof
       $listprof = Prof::all();
       return view('prof.index', ['profs' => $listprof]);
    }
    // le formulaire de prof creation
     public function create(){
         return view('prof.create');
     }
     //enregistrement
      public function store(Request $request){
          $teacher = new Teacher();
        // var -> champs dans bdd = var dans chmps $req ->input(nom input)
        $teacher ->nom =$request ->input('nom');
        $teacher ->grade =$request ->input('grade');
        session()->flash('success', 'prof  a étè bien crée');
        $teacher->save();
      }
      //recuperer un prof ajoutant dans formulaire
       public function edit(){
        $prof = Prof::find($id);
        return view('prof.edit', ['prof' => $prof]);
       }
       //modifier
         public function update(){
            $prof = Prof::find($id);
            $prof->nom = $request->input('nom');
            $prof->grade = $request->input('grade');
            $prof->save();
            return redirect('prof');
       }
       //supprimer
         public function destroy(){
       }
       //return $request->all();
       $prof = Prof::find($id);

       $prof->delete();
       session()->flash('danger', 'prof a étè  supprimé');
       return redirect('prof');
}

