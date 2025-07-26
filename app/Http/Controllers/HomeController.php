<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::available()->recent()->limit(4)->get();
        dd($properties->first());
        return view('home', ['properties' => $properties]);
    }
}
