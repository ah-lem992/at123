<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;

class PromoController extends Controller
{
    //list de promo
    public function index()
    {
        #return view('promo.index');
        #recuperer tout les annees
        $listpromo = Promo::all();
        return view('promo.index', ['promos' => $listpromo]);
    }
    // creation année
    public function create()
    {
        return view('promo.create');
    }
    //enregistrement
    public function store(Request $request)
    {
        $promo = new Promo();
        // var -> champs dans bdd = var dans chmps $req ->input(nom input)
        $promo->annee = $request->input('annee');
        $promo->save();
        session()->flash('success', 'année  a étè bien crée');
        return redirect('promo');
    }
    //recuperer une année et modifier
    public function edit($id)
    {
        $promo = Promo::find($id);
        return view('promo.edit', ['promo' => $promo]);
    }
    //modifier
    public function update(Request $request, $id)
    {
        $promo = Promo::find($id);
        $promo->annee = $request->input('annee');
        $promo->save();
        return redirect('promo');
    }
    //supprimer
    public function destroy(Request $request, $id)
    {
        //return $request->all();
        $promo = Promo::find($id);

        $promo->delete();
        session()->flash('danger', 'année a étè  supprimé');
        return redirect('promo');
    }
}
