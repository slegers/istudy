<?php

namespace App\Http\Controllers;

use App\Studymoment;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudymomentController extends Controller
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
        $studymoments = Studymoment::limit(10)->orderBy('id', 'desc')->get();
        $courses = $this->get_courses();
        
        return view('sm_overview',compact('studymoments','courses'));
    }
    public function get_courses(){
        $array = array();
        foreach(db::table('courses')->get() as $key => $c){
            $array[$c->id] = $c;
        }
        return $array;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('studymoment',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table('studymoments')->insert(
            [
            'user_id' => Auth::id(),
            'course_id' => $request['course_id'],
            'date' => $request['date'],
            'duration' => $request['duration'],	
            'in_class' => $request['in_class']
            ]
            );
        return redirect()->route('studymoment.index');

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
    public function edit($id = null)
    {
        return view('studymoment');
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
