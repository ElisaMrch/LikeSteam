<?php

namespace App\Http\Controllers\Shop;

use App\Models\Jeu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
