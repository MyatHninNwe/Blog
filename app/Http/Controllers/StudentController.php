<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Subject;
use App\Models\Ateam;
use App\Models\Student;

class StudentController extends Controller
{   
    
        public function __construct()
    {
        $this ->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student=Student::all();
        return view('student.stu_create',compact('student'));
    }

    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $students=Student::all();
        $departments=Department::all();
        $subjects=Subject::all();
        $ateams=Ateam::all();
        return view('student.stu_create',compact('students','departments','subjects','ateams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'photos'=>'required|mimes:jpeg,png,jpg|max:2048',
            'age'=>'required',
            'address'=>'required',
            'f_name'=>'required',
            'department_id'=>'required',
            'subject_id'=>'required',
            'ateam_id'=>'required',
        ]);

        $name=$request->name;
        $file=$request->file("photos");
        $upload=time().'-'.$file->getClientOriginal();
        $file->move(public_path('image'),$upload);
        $age=$request->age;
        $address=$request->address;
        $f_name=$request->f_name;
        $department_id=$request->department_id;
        $subject_id=$request->subject_id;
        $ateam_id=$request->ateam_id;

        $table = new Student;
        $table ->name = $name;
        $table ->photos = $upload;
        $table ->age = $age;
        $table ->address = $address;
        $table ->f_name = $f_name;
        $table ->department_id = $department_id;
        $table ->subject_id = $subject_id;
        $table ->ateam_id = $ateam_id;
        $table->save();
        return redirect()->back()->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
