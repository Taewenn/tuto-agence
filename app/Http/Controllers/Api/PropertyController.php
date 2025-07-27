<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        return PropertyResource::collection(Property::limit(10)->get());
    }
}
