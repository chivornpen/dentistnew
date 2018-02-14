<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class defaultController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            return view('admin.user.index');
        }else{

            $user = User::all();
            if(!count($user)){
                $u = new User();
                $u->name = "Supper";
                $u->email ="supper@gmail.com";
                $u->password = bcrypt('supper');
                $u->isChangepw = 1;
                $u->isActive = 1;
                $u->save();

                $u = new User();
                $u->name = "Administrator";
                $u->email ="admin@gmail.com";
                $u->password = bcrypt("admin");
                $u->isChangepw = 1;
                $u->isActive = 1;
                $u->save();
            }
            return view('welcome');
        }
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
