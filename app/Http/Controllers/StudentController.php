<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        return view('welcome',[
            'students'=>Student::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.addStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "*"=> 'required',
            "email"=>'email|unique:students',
            "phone"=>'unique:students',
            "reg"=>'unique:students',
            "roll"=>'unique:students',
        ]);
        if($request->file('image')){

            $file_name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save(base_path('public/uploads/students/'.$file_name));
            Student::insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'roll'=>$request->roll,
                'reg'=>$request->reg,
                'technology'=>$request->technology,
                'image'=>$file_name,
                'semester'=>$request->semester,
                'session'=>$request->session,
                'fatherName'=>$request->fatherName,
                'motherName'=>$request->motherName,
                'gender'=>$request->gender,
                'group'=>$request->group,
                'address'=>$request->address,
                'created_at' => now()
            ]);
            return back()->withSuccess('Student add Success');
        }
        Student::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'roll'=>$request->roll,
            'reg'=>$request->reg,
            'technology'=>$request->technology,
            'semester'=>$request->semester,
            'session'=>$request->session,
            'fatherName'=>$request->fatherName,
            'motherName'=>$request->motherName,
            'gender'=>$request->gender,
            'group'=>$request->group,
            'address'=>$request->address,
            'created_at' => now()
        ]);
       
        return back()->withSuccess('Student add Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            "*"=> 'required',
            'email' => 'required|email|unique:students,email,'.$student->id.',id' ,
            'phone' => 'min:11|required|unique:students,phone,'.$student->id.',id' ,
            'reg' => 'integer|required|unique:students,reg,'.$student->id.',id' ,
            'roll' => 'integer|required|unique:students,roll,'.$student->id.',id' ,
        ]);

        if ($request->file('image')) {

            if ($student->image) {
                $unlink =  unlink(base_path('public/uploads/students/'.$student->image));
            }
            $file_name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save(base_path('public/uploads/students/'.$file_name));
            $student->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'roll'=>$request->roll,
                'reg'=>$request->reg,
                'technology'=>$request->technology,
                'image'=> $file_name,
                'semester'=>$request->semester,
                'session'=>$request->session,
                'fatherName'=>$request->fatherName,
                'motherName'=>$request->motherName,
                'gender'=>$request->gender,
                'group'=>$request->group,
                'address'=>$request->address,
                'updated_at' => now()
            ]);
            return redirect(route('student.show',['id'=> $student->id]))->withSuccess('Student Modify Success');
        }

        $student->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'roll'=>$request->roll,
            'reg'=>$request->reg,
            'technology'=>$request->technology,
            'semester'=>$request->semester,
            'session'=>$request->session,
            'fatherName'=>$request->fatherName,
            'motherName'=>$request->motherName,
            'gender'=>$request->gender,
            'group'=>$request->group,
            'address'=>$request->address,
            'updated_at' => now()
        ]);
        return redirect(route('student.show',['id'=> $student->id]))->withSuccess('Student Modify Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student->image) {
            $unlink =  unlink(base_path('public/uploads/students/'.$student->image));
        }
        $student->delete();
        return back()->withSuccess('Student delete Success');
    }
    // search for signle student 
    public function search(Request $request)
    {
        $searchedStudent = [];
        switch ($request->type) {
            case 'roll':
                $searchedStudent = Student::where('roll', $request->searchText)->get();
                break;
            case 'reg':
                $searchedStudent = Student::where('reg', $request->searchText)->get();
                break;
            case 'name':
                $searchedStudent = Student::where('name', $request->searchText)->get();
                break;
            case 'tech':
                $searchedStudent = Student::where('technology', $request->searchText)->get();
                break;
            case 'semester':
                $searchedStudent = Student::where('semester', $request->searchText)->get();
                break;
            case 'group':
                $searchedStudent = Student::where('group', $request->searchText)->get();
                break;
            case 'session':
                $searchedStudent = Student::where('session', $request->searchText)->get();
                break;
        }
        return view('students.searchedStudent',[
            'students' => $searchedStudent,
            'searchText' => $request -> searchText,
            'searchType' => $request -> type,
            'request' => $request
        ]);
    }
}
