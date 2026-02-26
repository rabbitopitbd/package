<?php

namespace devrabbi\Crudpackage\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('crudpackage::index');
    }

    public function create()
    {
        return view('crudpackage::create');
    }

/**
 * Store a new item in the database.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\JsonResponse
 */
    public function store(Request $request)
    {
        return response()->json(['message' => 'Item created']);
    }

    public function edit($id)
    {
        return view('crudpackage::edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => 'Item updated']);
    }

    public function destroy($id)
    {
        return response()->json(['message' => 'Item deleted']);
    }
}
