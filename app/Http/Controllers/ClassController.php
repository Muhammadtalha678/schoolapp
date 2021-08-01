<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $classes = classes::orderby('id','DESC')->get();
        return view('classes.index',compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $valiate = $request->validate([
            'title' => 'required|min:10',
            'status' => 'required'
        ]);
        $class = new Classes;

        $class->title = $data['title'];
        $class->status = $data['status'];
        $class->save();

        return redirect('/classes')->with('success','Class create successfully');
    }

    public function show($class_id)
    {
        $class = Classes::find($class_id);
        $classshow = 'Show class';
        return view('classes.show',compact('class','classshow'));
    }

}