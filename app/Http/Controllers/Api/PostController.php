<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Obtener el listado de categorías paginado.
     */
    public function index()
    {
        return response()->json(Category::paginate(10));
    }

    public function all()
    {
        return response()->json(Post::get());
    }

    public function slug($slug)
    {
    $post = Post::with("categoty")->where("slug",$slug)->firstOrFail();
    $post->category;
    return response()->json($post);
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());

        return response()->json($category, 201); // 201 Created
    }

    /**
     * Mostrar una categoría específica por su ID.
     */
    public function show(Category $category)
    {
        return response()->json($category);
    }

    /**
     * Actualizar una categoría existente.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
        ]);

        $category->update($validated);

        return response()->json($category);
    }

    /**
     * Eliminar una categoría.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json(null, 204); // 204 No Content
    }
}