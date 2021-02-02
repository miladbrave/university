<?php

namespace App\Http\Controllers\back;

use App\CourseType;
use App\Cuorse;
use App\CuorseCategory;
use App\Http\Controllers\Controller;
use App\PreCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Cuorse::latest()->paginate(20);
        return view('back.course.index',compact('courses'));
    }

    public function create()
    {
        $courseTypes = CourseType::latest()->get();
        $courseCategories = CuorseCategory::latest()->get();
        $courses = Cuorse::latest()->get();
        return view('back.course.create',compact('courseCategories','courseTypes','courses'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
            'credit' => 'required',
            'reference' => 'required',
            'precourse' => 'required',
            'description' => 'required',
            'detail' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
            'credit.required' => 'لطفا تعداد واحد را وارد کنید.',
            'reference.required' => 'لطفا منابع درسی را وارد کنید.',
            'precourse.required' => 'لطفا دروس پیشنیاز را وارد کنید.',
            'description.required' => 'لطفا توضیح را وارد کنید.',
            'detail.required' => 'لطفا جزییات را وارد کنید.',

        ])->validate();

        $course = new Cuorse();
        $course->faname = $request->faname;
        $course->enname = $request->enname;
        $course->credit = $request->credit;
        $course->coursetype = $request->coursetype;
        $course->coursecategory = $request->coursecategory;
        $course->description = $request->description;
        $course->detail = $request->detail;
        $course->reference = $request->reference;
        $course->save();

        foreach ($request->precourse as $precours) {
                PreCourse::create([
                    "cuorse_id" => $course->id,
                    "pre_course_id" => $precours,
                ]);
        }

        return redirect()->route('course.index')->with('success','درس جدید ثبت شد');
    }

    public function show(Cuorse $cuorse)
    {
        //
    }

    public function edit(Cuorse $course)
    {
        $courseTypes = CourseType::latest()->get();
        $courseCategories = CuorseCategory::latest()->get();
        $courses = Cuorse::latest()->get();
        return view('back.course.edit',compact('courseCategories','courseTypes','courses','course'));
    }

    public function update(Request $request, Cuorse $course)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
            'credit' => 'required',
            'reference' => 'required',
            'precourse' => 'required',
            'description' => 'required',
            'detail' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
            'credit.required' => 'لطفا تعداد واحد را وارد کنید.',
            'reference.required' => 'لطفا منابع درسی را وارد کنید.',
            'precourse.required' => 'لطفا دروس پیشنیاز را وارد کنید.',
            'description.required' => 'لطفا توضیح را وارد کنید.',
            'detail.required' => 'لطفا جزییات را وارد کنید.',

        ])->validate();

        $course->faname = $request->faname;
        $course->enname = $request->enname;
        $course->credit = $request->credit;
        $course->coursetype = $request->coursetype;
        $course->coursecategory = $request->coursecategory;
        $course->description = $request->description;
        $course->detail = $request->detail;
        $course->reference = $request->reference;
        $course->save();

        $course->precourses()->delete();
        foreach ($request->precourse as $precours) {
            $course->precourses()->updateOrCreate([
                "cuorse_id" => $course->id,
                "pre_course_id" => $precours,
            ]);
        }

        return redirect()->route('course.index')->with('success','تغییرات ثبت شدند.');
    }

    public function destroy(Cuorse $course)
    {
        $course->delete();
        return back()->with('danger','درس مورد نظر حذف شد.');
    }
}
