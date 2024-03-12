<?php

namespace App\Http\Controllers;

use App\Models\GradeModel;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    //
    public function showAllGrades(){
        $grades = GradeModel::all();



        return view('welcome', compact('grades'));
    }

    public function getAddGrade(){

        return view("addgrade");
    }

    public function addGrade(Request $request){
        $request->validate([
            "subject"=>"required|string",
            "grade"=>"required|int|gte:1|lte:5",
            "professor"=>"required|string"
        ]);

        GradeModel::create([
           "subject"=>$request->subject,
            "grade"=> $request->grade,
            "professor"=>$request->professor
        ]);
        return redirect("/");
    }

}
