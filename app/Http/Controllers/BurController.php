<?php

namespace App\Http\Controllers;

use App\Models\Bur;
use App\Models\Burcat;
use App\Models\Inv;
use Illuminate\Http\Request;

class BurController extends Controller
{
    public function index(){
        $burs=Bur::all();
        return view('bur.index', compact('burs'));
    }
    public function create(){
        $categories=Burcat::all();
       $invs=Inv::all();
        return view('bur.create', compact('categories', 'invs'));
    }
    public function store(){
        $data=request()->validate([
            'position'=>'string',
            'responsibilities'=>'string',
            'category_id'=>'',
            'inv_id'=>'',
        ]);

        $invs = $data['inv_id'];
        unset($data['inv_id']);

          $bur = Bur::create($data);
        $bur->invs()->attach($invs);
        return redirect()->route('bur.index');
    }
    public function show(Bur $bur){
        return view('bur.show', compact('bur'));
    }
    public function edit(Bur $bur){
        $categories=Burcat::all();
        $invs=Inv::all();// шунда калдым. дальше
        return view('bur.edit', compact('bur', 'categories', 'invs'));
    }
    public function update(Bur $bur){
        $data=request()->validate([
            'position'=>'string',
            'responsibilities'=>'string',
            'category_id'=>'',
        ]);

        $bur->update($data);
        return redirect()->route('bur.show', $bur->id);
    }
    public function destroy(Bur $bur){
        $bur->delete();
        return redirect()->route('bur.index');
    }
}
