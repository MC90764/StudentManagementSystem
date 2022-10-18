<?php

namespace App\Http\Controllers;
use  App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;

    public function __construct()
    {
        $this->student= new Student();
    }

    public function index()
    {
        $response['students']=$this->student->all();

      return view('pages.dashboard.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->student->create($request->all());
        return redirect()->route('dashboard');
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
    public function destroy($student_id)
    {
       $student = $this->student->find($student_id);
       $student->delete();
       return redirect()->back();
    }

    public function activate($student_id)
    {
       $student = $this->student->find($student_id);
       $student->status=0;
       $student->update();
       return redirect()->back();
    }

    public function deactivate($student_id)
    {
       $student = $this->student->find($student_id);
       $student->status=1;
       $student->update();
       return redirect()->back();
    }
}
