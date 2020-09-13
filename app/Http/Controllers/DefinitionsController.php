<?php

namespace App\Http\Controllers;

use App\Definition;
use Illuminate\Http\Request;

class DefinitionsController extends Controller
{
    public function index() {
        return response()->json(Definition::get(), 200);
    }

    public function show($id) {
        return response()->json(Definition::find($id), 200);
    }

    public function store(Request $request) {
        $definition = Definition::create($request->all());
        return response()->json($definition, 201);
    }

    public function update(Request $request, Definition $definition) {
        $definition->update($request->all());
        return response()->json($definition, 200);
    }

    public function delete(Request $request, Definition $definition) {
        $definition->delete();
        return response()->json(null, 204);
    }
}
