<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jeu;

class JeuxTableSeeder extends Seeder
{
    /**;
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jeus = new Jeu();
        $jeus->nom = "Gum Gum";
        $jeus->prix = 28;
        $jeus->description = "Découvré un mode extrahordinaire en companie de votre pirate préféré. Aidé vos amis, batté des boss, déploqué de nouvelle capacité fin de devanir le roi des pirates !";
        $jeus->créateur = "Les weebs";
        $jeus->photo_principale = "luffy.jpg";
        $jeus->type = "platformers";
        $jeus->save();

        $jeus = new Jeu();
        $jeus->nom = "Rimworld";
        $jeus->prix = 29.99;
        $jeus->description = "Suit 3 survivants.";
        $jeus->créateur = "LudeonStudios";
        $jeus->photo_principale = "Rimworld.jpg";
        $jeus->type = "simulation";
        $jeus->save();

        $jeus = new Jeu();
        $jeus->nom = "Rainbow Six Siege";
        $jeus->prix = 19.99;
        $jeus->description = "Célèbre FPS";
        $jeus->créateur = "Ubisoft";
        $jeus->photo_principale = "Rainbow_Six_Siege.jpg";
        $jeus->type = "FPS";
        $jeus->save();

        $jeus = new Jeu();
        $jeus->nom = "Hades";
        $jeus->prix = 20.99;
        $jeus->description = "Défiez les dieux des morts";
        $jeus->créateur = "Supergiant Games";
        $jeus->photo_principale = "Hades.jpg";
        $jeus->type = "RPG";
        $jeus->save();

        $jeus = new Jeu();
        $jeus->nom = "Portal";
        $jeus->prix = 8.19;
        $jeus->description = "Visiter des mystérieux labo Aperture Science";
        $jeus->créateur = "Valve";
        $jeus->photo_principale = "portal.jpg";
        $jeus->type = "casse tete";
        $jeus->save();

        $jeus = new Jeu();
        $jeus->nom = "Sea of Thieves";
        $jeus->prix = 39.99;
        $jeus->description = "aventure de pirate";
        $jeus->créateur = "Rare Ltd";
        $jeus->photo_principale = "SoT.jpg";
        $jeus->type = "Aventure";
        $jeus->save();

        $jeus = new Jeu();
        $jeus->nom = "Terraria";
        $jeus->prix = 9.99;
        $jeus->description = "creuser, survivre, explorer, construire";
        $jeus->créateur = "Re-Logic";
        $jeus->photo_principale = "Terraria.jpg";
        $jeus->type = "Survie";
        $jeus->save();

        $jeus = new Jeu();
        $jeus->nom = "Overcooked";
        $jeus->prix = 15.99;
        $jeus->description = "jeu de cuisine chaotique";
        $jeus->créateur = "Ghost Town Games Ltd";
        $jeus->photo_principale = "Overcooked.jpg";
        $jeus->type = "multijoueur";
        $jeus->save();

        $jeus = new Jeu();
        $jeus->nom = "Kingdom: New Lands";
        $jeus->prix = 14.99;
        $jeus->description = "devient le meilleur des rois";
        $jeus->créateur = "Noio";
        $jeus->photo_principale = "Kingdom.jpg";
        $jeus->type = "Strategie";
        $jeus->save();
    }
}
