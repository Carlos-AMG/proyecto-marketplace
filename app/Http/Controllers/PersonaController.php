<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash; 

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return view('persona/login');

    }

    public function showLogin(){
        return view('persona/formularioLogin');
    }

    public function login(Request $request){
        // $request
        $persona = Persona::where('correo', $request->correo)->get();
        // $persona = Persona::where('correo', 'carlos@correo.com')->get();

        // $contrasenaEncriptada = Hash::make($request->contrasena);
        
        return view('persona.index', ['personas' => $persona]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('persona/formularioRegistro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'correo' => 'required|email',
            'nombre' => ['required', 'min:3', 'max:15'],
            'contrasena' => ['required', Password::min(8)->letters()->mixedCase()->symbols()],
            'direccion' => 'required'
        ]);

        $persona = new Persona();
        $persona->correo = $request->correo;
        $persona->nombre = $request->nombre;
        $persona->contrasena = Hash::make($request->contrasena);
        $persona->direccion = $request->direccion;
        $persona->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
