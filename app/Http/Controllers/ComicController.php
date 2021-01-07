<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
  // DETAIL PAGE COMIC
  public function show($id)
  {
    // return $id;

    $comics= config('comics');

    // get specific comic by idea
    $comic = [];
    foreach ($comics as $item) {
      if ($id == $item['id']) {
        $comic = $item;
      }
    }

    return view('comics.show', compact('comic'));

  }
}
