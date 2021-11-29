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


}
