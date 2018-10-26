<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
            $users = User::all();
            return view('users.index', ['users' => $users]);
    }

    public function show(Request $request)
    {
        return view('users.index');       
    }

    public function create()
    {
        return view('users.create');
    } 

    public function edit($id)
    {
        $users = User::find($id);    
         
        return view('users.edit', compact('users'));        
    }

    public function store(Request $request)
    {
        User::created([
            'name' => $request->name,
            'email'=>$request->email
        ]);

        return view('users.create');
    }

    public function update(Request $request, $id)
    {
        $update = User::find($id);

        $update->name = $request['name'];
        $update->email = $request['email'];

        $update->save();

        return redirect('users/index');
    }
    public function delete(Request $request, $id)
    {
        $delete = User::find($id);

        $delete->name = $request['name'];
        
        $delete->email = $request['email'];
        
        $delete->delete();

        return redirect('users');
    }
}
