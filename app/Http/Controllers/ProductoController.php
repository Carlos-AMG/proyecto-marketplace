<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Producto;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();

        return view('producto/index_producto',['productos' => $productos]);
    }

    public function getAllProductsApi(Request $request)
    {
        $query = Producto::query();

        if ($request->has('name')) {
            $query->where('nombre', 'like', '%' . $request->input('name') . '%');
        }

        $limit = $request->input('limit', 10); // Default to 10 if not provided
        $products = $query->paginate($limit);

        $productData = $products->items();

        return response()->json(['data' => $productData], 200);
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
        
        // Flash a success message to the session
        
        Session::flash('success', "Product '{$request->nombre}' creado con exito!");
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

    public function eliminados(){
        $productosEliminados = Producto::onlyTrashed()->get();
        return view('producto/eliminados_producto',['productosEliminados'=>$productosEliminados]);
    }
    public function allProducts(){
        $productos = Producto::withTrashed()->get();
        return view('producto/todos_producto',['productos'=>$productos]);
    }
}
