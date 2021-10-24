<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class EmployeeController extends Controller
{

    public function index()
    {

        $users = employee::orderBy('id', 'DESC')->get();
        return view ('admin.office.employee_list',compact('users'));

    }

    public function create()
    {
        return view ('admin.office.employee_create');
    }


    public function store(Request $request)
    {

        employee::create([
            "user_name" => $request->user_name,
            "dpt_name" => $request->dpt_name,
            "user_contact" => $request->user_contact,
            "user_pass" => bcrypt($request->user_pass)
        ]);
        Session::flash('success','User added Successfully');
        return redirect()->route('employee.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = employee::find($id);
        return view ('admin.office.employee_edit',compact('user'));


    }


    public function update(Request $request, $id)
    {

    $user=employee::find($id);
    $user->update([
        "user_name" => $request->user_name,
        "dpt_name" => $request->dpt_name,
        "user_contact" => $request->user_contact,
        "user_pass" => bcrypt($request->user_pass)
    ]);
    return redirect()->route('employee.index');

    }


    public function destroy($id)
    {
        $user=employee::find($id);
        $user->delete();
        Session::flash('success','Delete successfully');
        return redirect()->route('employee.index');
    }
}
