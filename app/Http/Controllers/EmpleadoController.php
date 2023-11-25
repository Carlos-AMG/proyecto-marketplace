<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = User::all()->where('role','employee');

        return view('empleado/index_empleado',['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('empleado/create_empleado',['departamentos'=>$departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        // User::create($request->all())->hash('password')->role='employee';
        $emp = new User();
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->password = Hash::make($request->password);
        $emp->rfc = $request->rfc;
        $emp->role = 'employee';
        $emp->departamento_id = $request->departamento_id;
        $emp->save();

        return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $empleado)
    {
        return view('empleado/show_empleado',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $empleado)
    {
        return view('empleado/edit_empleado',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $empleado)
    {
        $request -> validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        User::where('id',$empleado->id)->update($request->except('_token','_method'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $departamento)
    {
        $departamento->delete();
        return redirect()->route('empleado.index');
    }
}
