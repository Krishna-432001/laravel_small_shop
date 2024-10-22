<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;

class BrandController extends Controller
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
        $categories = Brand::paginate($perPage);
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
        $brand = Brand::create($request->validate(['name' => 'required|string']));
        return response()->json($brand, 201);
    }

    public function show(Brand $brand)
    {
        return $brand;
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->validate(['name' => 'required|string']));
        return response()->json($brand);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return response()->json(null, 204);
    }
}
