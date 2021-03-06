<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\Module;

class defaultController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            $role = Role::where('isLock',0)->pluck('name','id');
            $module = Module::where('isLock',0)->pluck('nav','id');
            // dd($role);
            return view('admin.user.index',compact('role','module'));
        }else{

            $user = User::all();
            if(!count($user)){
                $u = new User();
                $u->name = "Supper";
                $u->email ="supper@gmail.com";
                $u->displayName = "Supper User";
                $u->password = bcrypt('supper');
                $u->isChangepw = 1;
                $u->isActive = 1;
                $u->isLock = 0;
                $u->save();

                $u = new User();
                $u->name = "admin";
                $u->email ="admin@gmail.com";
                $u->displayName = "Administrator";
                $u->password = bcrypt("admin");
                $u->isChangepw = 1;
                $u->isActive = 1;
                $u->isLock = 0;
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
