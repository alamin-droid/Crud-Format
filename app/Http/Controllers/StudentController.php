<?php

namespace App\Http\Controllers;

use App\library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {

        $users = library::orderBy('id', 'DESC')->get();
        return view ('admin.library.userlist',compact('users'));

    }

    public function create()
    {
        return view ('admin.library.create');
    }


    public function store(Request $request)
    {
        // UserInfo::create([

        // "user_contact" => $request->user_contact,
        // "user_pass" => bcrypt($request->user_pass)
        // ]);
//        dd($request->all());
        library::create([
            "user_name" => $request->user_name,
            "gender" => $request->gender,
            "dpt_name" => $request->dpt_name,
            "user_contact" => $request->user_contact,
            "user_pass" => bcrypt($request->user_pass)
        ]);
        Session::flash('success','User added Successfully');
        return redirect()->route('library.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = library::find($id);
        return view ('admin.library.edit',compact('user'));


    }


    public function update(Request $request, $id)
    {

        $user=library::find($id);
        $user->update([
            "user_name" => $request->user_name,
            "dpt_name" => $request->dpt_name,
            "gender" => $request->gender,
            "user_contact" => $request->user_contact,
            "user_pass" => bcrypt($request->user_pass)
        ]);
        return redirect()->route('library.index');

    }


    public function destroy($id)
    {
        $user=library::find($id);
        $user->delete();
        Session::flash('success','Delete successfully');
        return redirect()->route('library.index');
    }
}
