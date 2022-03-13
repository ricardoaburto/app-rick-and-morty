<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PersonajeResource;

use App\Models\Personaje;
use App\Models\Episodio;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PersonajeResource::collection(Personaje::with('episodio')->paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $personaje = Personaje::create([
            'nombre' => $request->nombre,
            'genero' => $request->genero,
            'especie' => $request->especie,
          ]);

          foreach ($request->episodios as $key => $value) {
            if(isset($value["url"]) && $value["url"] <> ""){
             $episodio = Episodio::create([
                 'url' => $value["url"],
                 'personaje_id' => $personaje->id
               ]);
            }
         }
    
          return new PersonajeResource($personaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personaje $personaje)
    {

        return new PersonajeResource($personaje);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personaje $personaje)
    {
   
      $personaje->update($request->only(['nombre', 'genero','especie']));

      return new PersonajeResource($personaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();

        return response()->json(null, 204);
    }

     /**
     * Show a list of the resource by name or genre.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        
        $result = Personaje::where('nombre', 'LIKE', '%'. $name. '%')->orWhere('genero','LIKE','%'.$name.'%')->get();

        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }

    }

    
}
