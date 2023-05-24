<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    
     public function create(Request $request)
     {
        if ($request->isMethod('post')) {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'course' => 'required|string',
            'tuition' => 'required|numeric',
        ]);

        $student = new Student();
        $student->name = $validatedData['name'];
        $student->course = $validatedData['course'];
        $student->tuition = $validatedData['tuition'];
        $student->save();

        return redirect()->route('students.show');
    }
         return view('students.create');
     }
 
    
    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $students = Student::all();

        return view('students.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student )
    {
        
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Student $student)
      {
        $student->update($request->all());
        

     return redirect()->route('students.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.show')->with('message', 'Student deleted successfully.');
    }
}
