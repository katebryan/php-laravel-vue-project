<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyReviewIndexResource;
use App\Models\Bookable;
use Illuminate\Http\Request;

class PropertyReviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id, Request $request)
    {
        $bookable = Bookable::findOrFail($id);

        return PropertyReviewIndexResource::collection($bookable->reviews()->latest()->get());
    }
}
