<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Define pagination parameters
        $perPage = $request->input('perPage', 2); // Default to 10 items per page
        $currentPage = $request->input('page', 1);
        
        // Get paginated categories
        $categories = Category::paginate($perPage);
        $totalItems = $categories->total(); // Total items in the dataset

            
        // // Set the Content-Range header
        // $response = new Response($categories->items());
        // $response->header('Content-Range', 'categories '.$categories->firstItem().'-'.$categories->lastItem().'/'.$categories->total());
        
        // return $response;

        $response = response()->json($categories);
    
        // Set Content-Range header
        $response->headers->set('Content-Range', 'items '.$currentPage.'-'.$categories->count().'/' . $totalItems);
    
        return $response;
    }

    public function store(Request $request)
    {
        $category = Category::create($request->validate(['name' => 'required|string']));
        return response()->json($category, 201);
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->validate(['name' => 'required|string']));
        return response()->json($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(null, 204);
    }
}
