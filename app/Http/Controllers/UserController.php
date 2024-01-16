<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.information', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->role = $request->input('role');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->sex = $request->input('sex');
        $user->date = $request->input('date');
        $user->address = $request->input('address');
        $user->save();
        return back();
    }
}
