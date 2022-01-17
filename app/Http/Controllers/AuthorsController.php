<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', [
            'authors' => $authors
        ]);
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $newAuthor = Author::create([
            'name' => $request->name
        ]);

        return redirect('/authors');
    }
}
