<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
      $query=Property::query();

      if($request->location)
        {
            $query->where('location','like','%'. $request->location .'%');
        }
          if($request->type)
        {
            $query->where('type','like','%'. $request->type .'%');
        }

          if ($request->price) {
            if ($request->price == 'low') {
                $query->where('price', '<', 5000000);
            } elseif ($request->price == 'medium') {
                $query->whereBetween('price', [5000000, 10000000]);
            } elseif ($request->price == 'high') {
                $query->where('price', '>', 10000000);
            }
        }
 
          $properties = $query->paginate(6);
        return view('property', compact('properties'));
    }
}
