<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookable;
use App\Http\Resources\PropertyShowResource;
use App\Http\Resources\PropertyIndexResource;

class PropertyController extends Controller
{
    public function index()
    {
        return PropertyIndexResource::collection(Bookable::all());
    }

    public function show($id)
    {
        return new PropertyShowResource(Bookable::findOrFail($id));
    }
}
