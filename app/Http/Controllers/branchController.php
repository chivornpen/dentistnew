<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class branchController extends Controller
{

    public function index()
    {
        $b=0;
//        $b = Branch::where('unused',1)->get();
        return view('admin.branch.table_content');
    }


    public function create()
    {
        return view('admin.branch.create');
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
