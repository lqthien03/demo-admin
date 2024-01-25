<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        $total = Mail::count();
        return view('users.information', compact('user', 'total'));
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
        return back()->with('messageSucces', 'Cập nhật thành công');
    }
    public function edit_password($id)
    {
        $user = User::findOrFail($id);
        return view('users.resset-password', compact('user'));
    }
    public function update_password(Request $request)
    {
        // dd($request);
        $request->validate([
            'old_password' => 'required|min:6|max:100',
            'new_password' => 'required|min:6|max:100',
            'confirm_password' => 'required|same:new_password',
        ]);
        $current_user = Auth()->user();
        // dd($current_user);
        if (Hash::check($request->old_password, $current_user->password)) {
            $current_user->update([
                'password' => bcrypt($request->new_password)
            ]);
            return view('dashboard');
        } else {
            return back();
        }
    }
}
