<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class TestController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function employees() {

        $employees = Employee::all();
        return view('pages.home', compact("employees"));
    }

    public function edit($id) {

        $employee= Employee::find($id);
        return view('pages.form', compact('employee'));
    }

    public function update(Request $request, $id) {

       

        $validate= $request->validate([
            'firstname'=> 'required|max:100',
            'lastname'=> 'required|max:100',
            'role'=>'required|max:20',
            'ral' => 'nullable|numeric'
        ]);

        $employee = Employee::find($id);
        $employee -> update($validate);

        return redirect() -> route('employees');

    }

}
