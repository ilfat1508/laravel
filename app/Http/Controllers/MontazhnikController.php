<?php

namespace App\Http\Controllers;

use App\Models\montazhnik;
use Illuminate\Http\Request;

class MontazhnikController extends Controller
{
public function index(){
    $montazhniks=montazhnik::all();
    return view('montazhnik.index', compact('montazhniks'));
}
public function create(){
    return view('montazhnik.create');
}
public function store(){
    $data=request()->validate([
        'name'=>'string',
        'surname'=>'string',
    ]);
    montazhnik::create($data);
    return redirect()->route('montazhnik.index');
}
public function show(montazhnik $id){
    return view('montazhnik.show', compact('id'));
}
public function edit(montazhnik $id){
    return view('montazhnik.edit', compact('id'));
}
public function update(montazhnik $id){
    $data=request()->validate([
        'name'=>'string',
        'surname'=>'string',
    ]);
    $id->update($data);
    return redirect()->route('montazhnik.show', $id->id);
}
public function destroy(montazhnik $id){
$id->delete();
return redirect()->route('montazhnik.index');
}

}
