<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EmployeesController extends Controller
{
    //insertion

    public function insert() {
        return view('insert');
    }
    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $salary = $request->salary;
        $birth_date = $request->birth_date;
        $department = $request->department;
        $status = $request->status;
        $gender = $request->gender;

        DB::table('employees')->insert([
            'name'  => $name,
            'email' => $email,
            'salary' => $salary,
            'birth_date' => $birth_date,
            'department' => $department,
            'status' => $status,
            'gender' => $gender,
        ]);
        return redirect()->to('employees');

        // {
        //    echo 'successfully inserted';

        // }
    }
    //insertion

    public function show() {
        $employees = DB::table('employees')->get();
        return view('show',compact('employees'));

    }

    public function edit($id)
{
    $employees =DB::table('employees')->where('id','=',$id)->first();
    return view ('edit',compact('employees'));

}

public function update(Request $request,$id)
{

    $name = $request->name;
    $email = $request->email;
    $salary = $request->salary;
    $birth_date = $request->birth_date;
    $department = $request->department;
    $status = $request->status;
    $gender = $request->gender;

    $employees =DB::table('employees')->where('id',$id)->update([
        'name' => $name,
        'email' => $email,
        'salary' => $salary,
        'birth_date' => $birth_date,
        'department' => $department,
        'status' => $status,
        'gender' => $gender,
    ]);
    //return redirect()->to('employees');
    return redirect()->back()->with('msg','Successfully Updated');
}
public function delete($id)
{
    DB::table('employees')->where('id', '=', $id)->delete();
    return redirect()->back()->with('msg','Deleted successfully!');

}

}
