<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BankController extends Controller
{

    public function index()
    {

        $users = Bank::orderBy('id', 'DESC')->get();

        return view('admin.Bank.index_bank',compact('users'));
    }


    public function create()
    {
        return view('admin.Bank.create_bank');
    }


    public function store(Request $request)
    {


        $image = $request->file('image');

        $image_name = rand().'.'.$image->getClientOriginalExtension();

        $image->move(public_path().'/assets/images/user_images' , $image_name);

//                dd($request->all());

        Bank::create([
            "client_name"=>$request->name,
            "client_number"=>$request->number,
            "account_number"=>$request->ac_number,
//            "gender"=>$request->gender,
            "client_address"=>$request->address,
            "verification_type"=>$request->v_type ,
            "verification_number"=>$request->v_number,
            "client_picture"=>$image_name,
            "mail_id"=>$request->mail,
            "client_password"=>$request->pass,
            ]);

        return redirect()->route('bank.index');


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user =Bank::find($id);

        return view ('admin.Bank.edit_bank',compact('user'));

    }


    public function update(Request $request, $id)
    {
        $user =Bank ::find($id);
        if (!empty($request->file('image'))) {

            if (!empty($user->image)) {
                unlink('assets/images/user_images/' .$user->image);
            }

            $image = $request->file('image');
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path() . '/assets/images/user_images',$image_name);
        }
        else{
            $image_name=$user->image;
        }
        $user->update([
            "client_name"=>$request-> name,
            "client_number"=>$request-> number,
            "account_number"=>$request-> ac_number,
//            "gender"=>$request-> gender,
            "client_address"=>$request-> address,
            "verification_type"=>$request->v_type ,
            "verification_number"=>$request->v_number,
            "client_picture"=>$image_name,
            "mail_id"=>$request-> mail,
            "client_password"=>$request-> pass,
        ]);

        return redirect()->route('bank.index');

    }

    public function destroy($id)
    {
        $user=Bank::find($id);
        $user->delete();

        return redirect()->route('bank.index');

    }
}
