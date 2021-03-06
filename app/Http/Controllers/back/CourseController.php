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
        $type = CourseType::latest()->get();
        $category = CuorseCategory::latest()->get();
        return view('back.course.index', compact('courses', 'type', 'category'));
    }

    public function create()
    {
        $courseTypes = CourseType::latest()->get();
        $courseCategories = CuorseCategory::latest()->get();
        $courses = Cuorse::latest()->get();
        return view('back.course.create', compact('courseCategories', 'courseTypes', 'courses'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'faname' => 'required',
            'enname' => 'required',
            'credit' => 'required',
            'reference' => 'required',
            'description' => 'required',
            'detail' => 'required',
        ], [
            'faname.required' => 'لطفا عنوان فارسی را وارد کنید.',
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
            'credit.required' => 'لطفا تعداد واحد را وارد کنید.',
            'reference.required' => 'لطفا منابع درسی را وارد کنید.',
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

        if ($request->precourse) {
            foreach ($request->precourse as $precours) {
                PreCourse::create([
                    "cuorse_id" => $course->id,
                    "pre_course_id" => $precours,
                ]);
            }
        }

        return redirect()->route('course.index')->with('success', 'درس جدید ثبت شد');
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
        return view('back.course.edit', compact('courseCategories', 'courseTypes', 'courses', 'course'));
    }

    public function update(Request $request, Cuorse $course)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
            'faname' => 'required',
            'credit' => 'required',
            'reference' => 'required',
            'description' => 'required',
            'detail' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
            'faname.required' => 'لطفا عنوان فارسی را وارد کنید.',
            'credit.required' => 'لطفا تعداد واحد را وارد کنید.',
            'reference.required' => 'لطفا منابع درسی را وارد کنید.',
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

            $course->precourses()->detach();
            $course->precourses()->attach($request->precourse);

        return redirect()->route('course.index')->with('success', 'تغییرات ثبت شدند.');
    }

    public function destroy(Cuorse $course)
    {
        $course->delete();
        return back()->with('danger', 'درس مورد نظر حذف شد.');
    }
}
