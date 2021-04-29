<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;    

class TeacherController extends Controller
{
     //liste des prof
    public function index(){
       //index de prof
        return view('teacher.index');
    }
    // le formulaire de prof creation
     public function create(){
         return view('teacher.create');
     }
     //enregistrement 
      public function store(Request $request){
          $teacher = new Teacher();
        // var -> champs dans bdd = var dans chmps $req ->input(nom input)
        $teacher ->nom =$request ->input('nom');
        $teacher ->grade =$request ->input('grade');
        $teacher->save();
      }
      //recuperer un prof ajoutant dans formulaire
       public function edit(){
       }
       //modifier
         public function update(){
       }
       //supprimer 
         public function destroy(){
       }
}

