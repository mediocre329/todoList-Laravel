<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request) {
        
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);

        todolist::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
    }
}
