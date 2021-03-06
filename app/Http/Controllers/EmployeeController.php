<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
      public function create()
    {
        return view('create');
    }
     public function store(Request $request)
    {
        $crud = new Crud([
          'title' => $request->get('title'),
          'post' => $request->get('post')
        ]);

        $crud->save();
        return redirect('/crud');
    }
}
