<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** $catalogo = [
          *  ['producto' => 'Harina de trigo'],
           * ['producto' => 'Arroz parvorizado'],
            *['producto' => 'Chocolate en polvo'],
            *['producto' => 'Café liofilizado'],
            *['producto' => 'Queso campesino'],
        *];
 
        return view('catalogo', compact('catalogo'));*/
        /** $catalogo = \DB::table('productos')->get();
        *return view('catalogo', compact('catalogo'));*/
        //$catalogo = producto::get();
        //$catalogo = producto::orderBy('created_at', 'DESC')->get();
        //Latest recibe el nombre de la columna que se va a ordenar en formac descendente
        //$catalogo = producto::latest('cantidad_disponible')->get();
        //Indicando la paginacion, 15vpor defecto
        //$catalogo = producto::latest('precio')->paginate(1);
        //return view('catalogo', \compact('catalogo'));
        // la vista referenciada: 'catalogo.blade.php'
        return view('productos.index', [
        // array asociativo procesado en 'catalogo.blade.php'
        'productos' => producto::latest('precio')->paginate(2)
        ]);
    }

    public function create() {
        return view('producto.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {
        return Producto::create([
            'nombre' => request('nombre'),
            'precio' => request('precio'),
            'iva' => request('iva'),
            'cantidad_disponible' => request('cantidad_disponible'),
            'cantidad_minima' => request('cantidad_minima'),
            'cantidad_maxima' => request('cantidad_maxima'),
            'url' => request('url')
        ]);
    }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     return view('productos.show', [
    //         'producto' => producto::findOrFail($id),
    //     ]);
    // }
    public function show(Producto $producto) {
        return view('productos.show', [
            'producto' => $producto
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
