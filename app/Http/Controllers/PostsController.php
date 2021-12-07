<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Jeu;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['execpt'=> ['index', 'show']]);
    }
    
        
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.index')
            ->with('jeus', Jeu::orderBy('created_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poste');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'créateur' => 'required',
            'description' => 'required',
            'categorie' => 'required',
            'prix' => 'required',
            'url' => 'required',
            'photo_principale' => 'required'
        ]);
        //$newImageName = uniqid() . '-' . $request->nom . '-' . $request->photo->extension();
        //$request->photo->move(public_path('jeux'), $newImageName);
        
        
        Jeu::create([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Jeu::class, 'slug', $request->nom),
            'photo_principale' => $request->input('photo_principale'),
            'user_id' => auth()->user()->id,
            'créateur' => $request->input('créateur'),
            'type' => $request->input('categorie'),
            'prix' => $request->input('prix'),
            'url' => $request->input('url')
        ]);

        return redirect('/poste')
            ->with('message', 'Ton jeu a été posté ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('show')
            ->with('jeu', Jeu::where('slug',$slug)->first()); 
            
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('edit')
        ->with('jeu', Jeu::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'nom' => 'required',
            'créateur' => 'required',
            'description' => 'required',
            'categorie' => 'required',
            'prix' => 'required',
            'url' => 'required',
            'photo_principale' => 'required'
        ]);
        
        Jeu::where('slug', $slug)
            ->update([
                'nom' => $request->input('nom'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Jeu::class, 'slug', $request->nom),
                'photo_principale' => $request->input('photo_principale'),
                'user_id' => auth()->user()->id,
                'créateur' => $request->input('créateur'),
                'type' => $request->input('categorie'),
                'prix' => $request->input('prix'),
                'url' => $request->input('url')
            ]);
        return redirect('/autre')
            ->with('message', 'ton jeu a été modifier !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $jeu = Jeu::where('slug', $slug);
        $jeu->delete();

        return redirect('/autre')
            ->with('message', 'Ton jeu a été supprimé');
    }
}