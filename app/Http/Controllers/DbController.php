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
    return view ('home', compact('membres', 'total'));

    }
    

}
