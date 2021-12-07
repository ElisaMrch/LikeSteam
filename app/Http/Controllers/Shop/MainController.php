<?php

namespace App\Http\Controllers\Shop;

use App\Models\Jeu;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;


class MainController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth');
    }

    /*public function index(){
        $jeus = Jeu::all();
            
        //dd($jeus);
        return view('shop.index', compact('jeus'));
    }*/

    /*public function profile(){
        return view('profile');
    }*/
    
    public function search()
    {
        //request()->validate([
            //'recherche' => 'required|min:1'
        //]);
        
        $categorie = request()->input('categorie');
        $recherche = request()->input('recherche');
        if($categorie != "" && $recherche == ""){
            $jeus = Jeu::where('type', '=', "$categorie")
            ->paginate(1000);
        }
        if($categorie == "" && $recherche != "")
        {
            $jeus = Jeu::where('nom', 'like', "%$recherche%")
            ->orWhere('description', 'like', "%$recherche%")
            ->orWhere('type', 'like', "%$recherche%")
            ->orWhere('prix', 'like', "%$recherche%")
            ->orWhere('créateur', 'like', "%$recherche%")
            ->paginate(1000);
        }
        if($categorie != "" && $recherche != "")
        {   
            $jeus = Jeu::where('nom', 'like', "%$recherche%")
            ->orWhere('description', 'like', "%$recherche%")
            ->orWhere('type', 'like', "%$recherche%")
            ->orWhere('prix', 'like', "%$recherche%")
            ->orWhere('créateur', 'like', "%$recherche%") 
            ->paginate(1000);
        }
        
       
        return view('repRecherche')->with('jeus', $jeus);
    }
}