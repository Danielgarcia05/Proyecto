<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Http\Requests\CreatePeliculasRequest;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas=Pelicula::all();
        return view("peliculas.index", compact("peliculas"));
        
    }
    public function lista()
    {
        $peliculas=Pelicula::all();
        return $peliculas;
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("peliculas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePeliculasRequest $request)
    {   

        /*$pelicula=new Pelicula;
        $pelicula->titulo=$request->titulo;
        $pelicula->duracion=$request->duracion;
        $pelicula->fecha=$request->fecha;
        $pelicula->genero=$request->genero;
        $pelicula->idioma=$request->idioma;
        $pelicula->calidad=$request->calidad;
        $pelicula->subtitulos=$request->subtitulos;
        $pelicula->sinopsis=$request->sinopsis;
        $pelicula->save();*/

        $entrada=$request->all();
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $entrada['ruta_img']=$nombre;
        }
        Pelicula::create($entrada);
        return redirect("/peliculas");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula=Pelicula::findOrFail($id);
        return view("peliculas.show", compact("pelicula"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula=Pelicula::findOrFail($id);
        return view("peliculas.edit", compact("pelicula"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelicula=Pelicula::findOrFail($id);
        $pelicula->update($request->all());
        return redirect("/peliculas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula=Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect("/peliculas");
    }
}
