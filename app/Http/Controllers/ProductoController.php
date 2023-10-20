<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $productos = Producto::all();

        return view('producto/index_producto',['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('producto/create_producto',['departamentos'=>$departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required','min:3','max:50'],
            'existencia' => 'required',
            'precio' => 'required',
            'descripcion' => ['required','min:1','max:300'],
            'imagen' => 'required'
        ]);

        Producto::create($request->all());

        // $producto = new Producto();
        // $producto->nombre = $request->nombre;
        // $producto->existencia = $request->existencia;
        // $producto->precio = $request->precio;
        // $producto->descripcion = $request->descripcion;
        // $producto->save();

        // $departamento = new Departamento();
        // $departamento->id = $request->departamento_id;
        
        
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('producto/show_producto',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('producto/edit_producto',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => ['required','min:3','max:50'],
            'existencia' => 'required',
            'precio' => 'required',
            'descripcion' => ['required','min:1','max:300'],
            'imagen' => 'required'
        ]);

        Producto::where('id',$producto->id)->update($request->except('_token','_method'));
        // $producto->nombre = $request->nombre;
        // $producto->existencia = $request->existencia;
        // $producto->precio = $request->precio;
        // $producto->descripcion = $request->descripcion;
        // $producto->save();
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
