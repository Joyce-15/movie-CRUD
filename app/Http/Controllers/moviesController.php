<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;
use App\Services\moviesService;

class moviesController extends Controller
{
    public function index()
    {
        $movies = movie::all();
        return view('layouts.movies', compact('movies'));
    }

    public function create(Request $request, moviesService $service)
    {
        $service->save($request);
        return redirect()->back()->with(['message' => 'New Movie has been added!']);
    }

    public function update(Request $request, moviesService $service)
    {
        $service->update($request);
       return redirect()->back()->with(['message' => 'Successfully assigned actor to a movie.']);
    }

    public function delete($id)
    {
        movie::find($id)->delete();
        return redirect()->back()->with(['delete' => 'Movie deleted!']);
    }

    public function edit(Request $request, moviesService $service)
    {
        $service->edit($request);
        return redirect()->back()->with(['edit' => 'Edit has been saved!']);
    }
}
