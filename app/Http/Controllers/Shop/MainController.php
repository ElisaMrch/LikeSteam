<?php

namespace App\Http\Controllers\Shop;

use App\Models\Jeu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $jeus = Jeu::all();
        //dd($jeus);
        return view('shop.index', compact('jeus'));
    }
}