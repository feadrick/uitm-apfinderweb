<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\AcademicProgram;
class ApplicationController extends Controller
{
    function index(){
        return view('home');
    }

    function Search(){
        $headtitle='Search';
        return view('Search',['data'=>[]]);
    }

    function getdata(Request $request){
             return view('Search')->with( ['data' => Faculty::all()]);
    }
    
    function ajaxRequest(Request $request){
        $obj=Faculty::where('name','LIKE','%'.$request->input('keyword').'%')->get();
        return response()->json(compact('obj'));
    }

    function getcategorybasedfaculty(Request $request){
        $obj=Faculty::where('category_id',$request->input('category'))->get();
        return response()->json(compact('obj'));
    }

    function academicProgramList($facultyid){
        $ap=AcademicProgram::where('faculty_id',$facultyid)->get();
        return view('academicprogramlist')->with(compact('ap'));   
    }
}
