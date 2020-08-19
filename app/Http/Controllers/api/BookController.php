<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModelBook;

class BookController extends Controller
{
    
    public function index()
    {
        return ModelBook::all();
    }

    
    public function store(Request $request)
    {
        ModelBook::create($request->all());
    }

   
    public function show($id)
    {
        return ModelBook::findOrFail($id);  
    }
    
    public function update(Request $request, $id)
    {
        $book = ModelBook::findOrFail($id);
        $book->update($request->all());
    }

    
    public function destroy($id)
    {
        $book = ModelBook::findOrFail($id);
        $book->delete();
    }
}
