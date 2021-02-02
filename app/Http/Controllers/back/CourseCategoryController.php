<?php

namespace App\Http\Controllers\back;

use App\CuorseCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseCategoryController extends Controller
{
    public function index()
    {
        $coursecategories = CuorseCategory::latest()->paginate(20);
        return view('back.course.category.index',compact('coursecategories'));
    }

    public function create()
    {
        return view('back.course.category.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
        ])->validate();

        $courseCategory = new CuorseCategory();
        $courseCategory->faname = $request->faname;
        $courseCategory->enname = $request->enname;
        $courseCategory->save();

        return redirect()->route('courseCategory.index')->with('success','دستبه بندی جدید ثبت شد.');
    }

    public function show(CuorseCategory $cuorseCategory)
    {
        //
    }

    public function edit($id)
    {
        $cuorseCategory = CuorseCategory::find($id);
        return view('back.course.category.edit',compact('cuorseCategory'));
    }

    public function update(Request $request,$id)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
        ])->validate();

        $cuorseCategory = CuorseCategory::find($id);
        $cuorseCategory->faname = $request->faname;
        $cuorseCategory->enname = $request->enname;
        $cuorseCategory->save();

        return redirect()->route('courseCategory.index')->with('success','تغییرات ثبت گردیدند.');
    }

    public function destroy($id)
    {
        $cuorseCategory = CuorseCategory::find($id);
        $cuorseCategory->delete();
        return back()->with('danger','دسته بندی حذف شد.');
    }
}
