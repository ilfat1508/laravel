<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function index(){
        $villages=Village::all();

        return view('village.index', compact('villages'));
    }

    public function create(){
        return view('village.create');
    }
    public function store(){
        $data=request()->validate([
            'name'=>'string',
            'content'=>'string',
            'likes'=>'integer',
        ]);
        Village::create($data);
        return redirect()->route('village.index');
    }
    public function show(Village $village){
        return view('village.show', compact('village'));
    }
    public function edit(Village $village){
        return view('village.edit', compact('village'));
    }
    public function update(Village $village){
        $data=request()->validate([
            'name'=>'string',
            'content'=>'string',
            'likes'=>'integer',
        ]);
      $village->update($data);
        return redirect()->route('village.show', $village->id);
    }
    public function destroy(Village $village){
        $village->delete();
        return redirect()->route('village.index');
    }
}
