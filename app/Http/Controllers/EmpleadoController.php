<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this -> middleware('auth');
    // }
    public function index()
    {
        return view('empleado/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado/create_empleado');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'correo' => 'required',
            'password' => 'required',
            'nombre' => 'requiered',
            'apellido' => 'required',
            'rfc' => 'required',
        ]);
        Empleado::create($request->all());

        return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'correo' => 'required',
            'password' => 'required',
            'nombre' => 'requiered',
            'apellido' => 'required',
            'rfc' => 'required',
        ]);
        Empleado::where('id',$request->id)->update($request->except('_token','_method'));

        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
