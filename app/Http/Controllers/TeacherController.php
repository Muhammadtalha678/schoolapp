<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $teachers = Teacher::latest()->paginate(2);
    
        return view('teachers.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());exit();
       $request->validate([
                   'name' => 'required',
                   'email' => 'required',
                   'password' => 'required',
                   'phone_no' => 'required',
                   'class_id' => 'required'
               ]);
           
               Teacher::create($request->all());
            
               return redirect()->route('teachers.index')
                               ->with('success','Teacher created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $pageTitle = 'Show Teacher Data';
       $teacher = Teacher::join('class', 'class.id', '=', 'teachers.class_id')->where('teachers.id',$teacher->id)
                     ->first(['teachers.name','teachers.email','teachers.phone_no','class.title']);
                     // var_dump($teacher); exit;
       return view('teachers.show',compact('teacher', 'pageTitle'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
       {
        $pageTitle = 'Edit Teacher';
        $teacher = Teacher::find($teacher->id);
           return view('teachers.edit',compact('teacher','pageTitle'));
       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, Teacher $teacher)
      {
          $request->validate([
             'name' => 'required',
             'email' => 'required',
             'phone_no' => 'required',
             'class_id' => 'required'
          ]);
      
          $teacher->update($request->all());
      
          return redirect()->route('teachers.index')->with('success','Teacher updated successfully');
      }
          

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Teacher $teacher)
    {
        $teacher->delete();
    
        return redirect()->route('teachers.index')
                        ->with('success','Teacher deleted successfully');
    }
}
