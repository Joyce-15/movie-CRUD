<?php

namespace App\Services;
use App\Models\movie;

class moviesService
{
    public function save($request){
            $movie = new movie;
            $movie->title = $request->title;
            $movie->save();
    }

    public function update($request){
        $movie = movie::find($request->id);
        $movie->actor = $request->actor;
        $movie->save();
    }
    
    public function edit($request){
        $movie = movie::find($request->id);
        $movie->title = $request->title;
        $movie->actor = $request->actor;
        $movie->save();
    } 
}
