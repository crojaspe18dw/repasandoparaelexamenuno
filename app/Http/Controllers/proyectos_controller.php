<?php

namespace App\Http\Controllers;

use App\Proyecto;

use App\Http\Requests\projects;

use Illuminate\Http\Request;

class proyectos_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos=Proyecto::all();
        return view('proyectos.proyectosindex',compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.proyectoscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(projects $request)
    {
        $nuevoproyecto=new Proyecto;
        $nuevoproyecto->nombre=$request->nombre;
        $nuevoproyecto->titulo=$request->titulo;
        $nuevoproyecto->fechainicio=$request->inicio;
        $nuevoproyecto->fechafin=$request->fin;
        $nuevoproyecto->horasestimadas=$request->estimadas;
        $nuevoproyecto->save();

        return redirect('/proyectos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $i
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto=Proyecto::find($id);
        return view('proyectos.proyectosshow',compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato=Proyecto::find($id);
        return view('proyectos.proyectosedit',compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(projects $request, $id)
    {
        $actualizar=Proyecto::find($id);
        $actualizar->nombre=$request->nombre;
        $actualizar->titulo=$request->titulo;
        $actualizar->fechainicio=$request->inicio;
        $actualizar->fechafin=$request->fin;
        $actualizar->horasestimadas=$request->estimadas;
        $actualizar->update();

        return redirect('proyectos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto=Proyecto::find($id);
        $proyecto->delete();
        return redirect('proyectos');
    }
}
