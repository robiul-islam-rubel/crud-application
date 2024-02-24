<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students =Student::all();
        return view('students.index',compact('students'));

    }

    public function create() {
        return view('students.create');
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:32',
        //     'address' => 'required|max:50',
        //     'phone' => 'required|max:15'
        // ]);
        $student = new Student;
        $student->name = $request->name;
        $student->address=$request->address;
        $student->phone = $request->phone;
        $student->save();

        return redirect()->back()->with('success','Data Stored Successfully');
    }

    // public function show($id) {
    //     $student = Student::find(1);
    //     print_r($student);
    //     return view('students.show',compact('student'));
    // }
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show',compact('student'));
    }
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, string $id) {
        $student = Student::find($id);
        $student = new Student;
        $student->name = $request->name;
        $student->address=$request->address;
        $student->phone = $request->phone;
        $student->save();

        return redirect()->back();

    }

    public function delete(string $id) {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();
    }

}
