<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

use App\Information;
use Illuminate\Support\Facades\Session as sessionAlias;
use function GuzzleHttp\Promise\all;
use function Symfony\Component\String\u;


class UserController extends Controller
{

    public function index()
    {

        $users = Information::orderBy('id', 'DESC')->get();
        return view ('admin.user.userlist',compact('users'));

    }

    public function create()
    {
        return view ('admin.user.create');
    }


    public function store(Request $request)
    {

//        $request->validate([
//            'user_pass'=>'required | confirmed ',
//        ]);

       $image = $request->file('image');

       $image_name = rand().'.'.$image->getClientOriginalExtension();

       $image->move(public_path().'/assets/images/user_images' , $image_name);

//        dd($request->all());

        Information::create([
            "user_name" => $request->user_name,
            "dpt_name" => $request->dpt_name,
            "user_contact" => $request->user_contact,
            "image" =>$image_name,
            "user_pass" => bcrypt($request->user_pass)
        ]);
        sessionAlias::GET('success','Data Added');
        return redirect()->route('user.index');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
//        $image = $request->file('image');
//        $image_name =$request->user_name. rand().'.'.$image->getClientOriginalExtension();
//        $image->move(public_path() . '/assets/images/user_images', $image_name);


        $user = Information::find($id);
        return view ('admin.user.edit',compact('user'));


    }


    public function update(Request $request, $id)
    {


//        $update = User::find($id);

        $user =Information ::find($id);
        if (!empty($request->file('user_image'))) {

            if (!empty($user->image)) {
                unlink('assets/images/user_images/' .$user->image);
            }

                $image = $request->file('user_image');
                $image_name = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path() . '/assets/images/user_images',$image_name);
        }
        else{
            $image_name=$user->image;
        }
        $user->update([
            "user_name" => $request->user_name,
            "dpt_name" => $request->dpt_name,
            "user_contact" => $request->user_contact,
            "image" => $image_name,
        ]);

        return redirect()->route('user.index');
        sessionAlias::PUT('success','updated')  ;
    }



        public function destroy($id)
    {
        $user=Information::find($id);
        $user->delete();

        return redirect()->route('user.index');
        sessionAlias::DELETE('success','successfully Deleted');
    }

    public function search(Request $request){
            $input = $request-> input;
            $users = Information::where('user_name','like',"%$input%")
            ->orwhere('user_contact','like',"%$input%")
//            ->orwhere('user_mail','like',"%$input%")
            ->orwhere('image','like',"%$input%")
            ->orwhere('dpt_name','like',"%$input%")

            ->orderBy('id','DESC')->get();

        return view('admin/user/userlist', compact('users'));
    }
}

