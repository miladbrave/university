<?php

namespace App\Http\Controllers\back;

use App\CourseType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseTypeController extends Controller
{
    public function index()
    {
        $coursetypes = CourseType::latest()->paginate();
        return view('back.course.type.index',compact('coursetypes'));
    }

    public function create()
    {
        return view('back.course.type.create');
    }

    public function store(Request $request)
    {
        $coursetype = new CourseType();
        $coursetype->faname = $request->faname;
        $coursetype->enname = $request->enname;
        $coursetype->save();
        return redirect()->route('courseType.index')->with('success','نوع درس ثبت شد.');
    }

    public function show(CourseType $courseType)
    {
        //
    }

    public function edit(CourseType $courseType)
    {
        return view('back.course.type.edit',compact('courseType'));
    }

    public function update(Request $request, CourseType $courseType)
    {
        $courseType->faname = $request->faname;
        $courseType->enname = $request->enname;
        $courseType->save();
        return redirect()->route('courseType.index')->with('success','تغییرات ثبت شد.');
    }

    public function destroy(CourseType $courseType)
    {
        $courseType->delete();
        return back()->with('danger','نوع درس با موفقیت حذف شد');
    }
}
