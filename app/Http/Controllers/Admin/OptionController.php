<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionFormRequest;
use App\Models\option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.options.index', [
            'options' => Option::paginate(25),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $option = new option();
        return view('admin.options.form', [
            'option' => $option,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        $option = Option::create($request->validated());
        return to_route('admin.option.index')->with('success', 'L\'option a été créé avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(option $option)
    {
        return view('admin.options.form', [
            'option' => $option,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, option $option)
    {
        $option->update($request->validated());
        return to_route('admin.option.index')->with('success', 'L\'option a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(option $option)
    {
        $option->delete();
        return to_route('admin.option.index')->with('success', 'L\'option a été supprimé avec succès.');
    }
}
