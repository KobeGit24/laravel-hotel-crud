<?php

namespace App\Http\Controllers;

use App\Stanza;
use Illuminate\Http\Request;

class StanzeController extends Controller
{
  public function index() {

    $stanze = Stanza::all();

    return view('stanze', compact('stanze'));
  }

  public function show($id) {

    $stanza = Stanza::findOrFail($id);

    return view('stanza', compact('stanza'));
  }

  public function create() {

    return view('create-stanza');
  }

  public function store(Request $request) {

    $data = $request -> all();
    $configurazione = Stanza::create($data);

    // Stanza::create($request -> all()); altra soluzione!

    return redirect() -> route('index');
}
}
