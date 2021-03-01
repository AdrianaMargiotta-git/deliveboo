<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typology;

class TypologyController extends Controller
{

  public function typologyIndex() {

      $typologies = Typology::all();

    return view('pages.typologies-index',compact('typologies'));
  }

  public function typologyShow($id) {

    $typology = Typology::findOrFail($id);

    return view('pages.typology-show',compact('typology'));
  }

}
