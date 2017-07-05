<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'category_id' => 'required|numeric'
        ];
        $this->validate($request, $rules);
        return redirect('/');
    }

    public function edit($id)
    {
        //
        return view('edit');
    }

    public function update(Request $request, $id)
    {
        //
        return redirect('/');
    }
}
