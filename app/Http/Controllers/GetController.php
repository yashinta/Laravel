<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class GetController extends Controller
{
    function retrieve() {
    	$buku = Buku::orderBy('id', 'ASC')->paginate(5);
    	return view('retrieve', compact('buku'));
    }
    function create() {
    	return view('create');
    }
    function update() {
    	return view('update');
    }
    function destroy(Request $request, $id) {
    	$buku = Buku::find($id);
    	$buku->delete();
    	return redirect('/');
    }
}
