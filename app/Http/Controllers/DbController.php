<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class DbController extends Controller
{
    public function db (){
        $membres= Membre::all();
        // $hommes = laravelmodelexo2::table('membres')->where('genre', '=', 'homme')->get();
        $total = Membre::count();
        $hommes = Membre::all()->where('genre','Homme');
        $femmes = Membre::all()->where('genre','Femme');
        $hommes18 = Membre::all()->where('genre', 'Homme')->whereBetween('age', [18,24] );
        $femmes18 = Membre::all()->where('genre', 'Femme')->whereBetween('age', [18,24] );
        $hc = Membre::all()->whereNotBetween('age',[18,24]);
    return view ('home', compact('membres', 'hommes', 'femmes', 'total', 'hommes18', 'femmes18', 'hc'));

    }
    

}
