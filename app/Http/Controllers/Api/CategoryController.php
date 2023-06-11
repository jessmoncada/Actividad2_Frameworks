<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\PutRequest;

class CategoryController extends Controller
{
    /**
     * Mostrar una lista de categorias creadas
     */
    public function index()
    {
        return response()->json(Category::paginate(10));
    }

    /**
     * Almacenar una categoria que se acaba de crear
     */
    public function store(StoreRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    /**
     * Actualizar categoria
     */
    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }

    /**
     * Eliminar una categoria
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('ok');
    }
}
