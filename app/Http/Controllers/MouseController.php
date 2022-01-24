<?php

namespace App\Http\Controllers;


use App\Models\Mouse;
use Illuminate\Http\Request;

class MouseController extends Controller
{
    public function create()
    {
    $MiceArr=[
        [
            'name'=>'mouse1',
            'likes'=>10
        ],
        [
            'name'=>'mouse2',
            'likes'=>20
        ],
        [
            'name'=>'mouse3',
            'likes'=>'15'
        ]
    ];
    foreach ($MiceArr as $mouse){
        Mouse::create($mouse);
    }
    dd('created');
    }


    public function update(){
        $mouse= Mouse::where('likes',10)->get();
        foreach ($mouse as $item){
      $item->update([
          'name'=>'update2',

      ]);
    }}

    public function delete(){
       $mice=Mouse::all();
     foreach ($mice as $mouse){
         dump($mouse->delete_at);
     }

    }

    public function firstOrCreate(){
        $mouse = Mouse::firstOrCreate([
            'name'=>'mouse1'
        ],[
            'name'=>'mouse1',
            'likes'=>'50'
        ]);
        dump($mouse->name);
    }

    public function updateOrCreate(){
  $mouse = Mouse::updateOrCreate(
      [
          'name'=>'mouse5'
      ],[
      'likes'=>40
  ]);

    }
}
