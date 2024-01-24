<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Register_advise;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function show()
    {
        $contact = Mail::all();
        // $total = Mail::where('id')->sum();
        $total = Mail::where('id', 1)->count();
        return view('mail.contact', compact('contact'));
    }

    public function create()
    {
        return view('mail.contact_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'topic' => 'required',
            'address' => 'required',
            'status' => 'required',
            'content' => 'required',
            'note' => 'required',
            'number' => 'required',
        ], [
            'name.required' => 'Ô này không được bỏ trống',
            'phone.required' => 'Ô này không được bỏ trống',
            'email.required' => 'Ô này không được bỏ trống',
            'topic.required' => 'Ô này không được bỏ trống',
            'address.required' => 'Ô này không được bỏ trống',
            'number.required' => 'Ô này không được bỏ trống',
            'status.required' => 'Ô này không được bỏ trống',
            'content.required' => 'Ô này không được bỏ trống',
            'note.required' => 'Ô này không được bỏ trống',
        ]);
        $contact = new Mail();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->topic = $request->input('topic');
        $contact->address = $request->input('address');
        $contact->status = $request->input('status');
        $contact->content = $request->input('content');
        $contact->note = $request->input('note');
        $contact->number = $request->input('number');
        $contact->created_at = Carbon::now();
        $contact->save();
        return redirect()->route('show.mail.contact')->with('messageSucces', 'tạo thành công');
    }
    public function edit($id)
    {
        $contact = Mail::find($id);
        return view('mail.contact_edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $contact = Mail::findOrFail($id);
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->topic = $request->input('topic');
        $contact->address = $request->has('address');
        $contact->status = $request->input('status');
        $contact->content = $request->input('content');
        $contact->note = $request->input('note');
        $contact->number = $request->input('number');
        // dd($contact);
        $contact->save();
        return back()->with('messageSucces', 'Cập nhật thành công');
    }

    public function show_register_advise()
    {
        $register_advise = Register_advise::all();
    }

    public function destroy($id)
    {
        $contact = Mail::find($id);
        $contact->delete();
        return back()->with('messageSucces', 'Xóa thành công');
    }
}
