<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;

class AnimalController extends Controller
{
    public function showAnimals()
    {
        //permet de récupérer tout le contenu de la table Animals et de la stocker dans la variable $animals
        $animals = Animal::All();
        return view('animals.animals', compact('animals'));
    }

    public function showRaces()
    {
        $races = Race::All();
        return view('animals.races', compact('races'));
    }

    public function createAnimal()
    {
        $races = Race::All();

        return view('animals.create', compact('races'));
    }

    public function storeAnimal(Request $request)
    {
        //dd($request);
        $animal=new Animal([ //pour créer un objet de type Animal
            "name" => $request->name,
            "age" => $request->age,
            "weight" => $request->weight,
            "height" => $request->height,
            "race_id" => $request->race_id,
        ]); 
        //dd ($animal);
        //hydration = utiliser l'objet créée et l'insérer dans BDD
        $animal->save();
        return redirect('animals');
    }

    
 

}
