<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    // GET /api/recetas (Devuelve todas las recetas para el catálogo)
    public function index()
    {
        return response()->json(Receta::all(), 200);
    }

    // GET /api/recetas/{id} (Devuelve una receta específica para la vista de detalle)
    public function show($id)
    {
        $receta = Receta::find($id);

        if (!$receta) {
            return response()->json(['message' => 'Receta no encontrada'], 404);
        }

        return response()->json($receta, 200);
    }
}
