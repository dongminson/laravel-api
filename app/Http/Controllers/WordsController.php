<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function index() {
        return response()->json(Word::with('definitions')->get(), 200);
    }

    public function show($id) {
        return response()->json(Word::with('definitions')->find($id), 200);
    }

    public function store(Request $request) {
        $word = Word::create($request->all());
        return response()->json($word, 201);
    }

    public function update(Request $request, Word $word) {
        $word->update($request->all());
        return response()->json($word, 200);
    }

    public function delete(Request $request, Word $word) {
        $word->delete();
        return response()->json(null, 204);
    }
}
