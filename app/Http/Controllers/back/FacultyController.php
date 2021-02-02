<?php

namespace App\Http\Controllers\back;

use App\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FacultyController extends Controller
{

    public function index()
    {
        $faculties = Faculty::latest()->paginate(20);
        return view('back.faculty.index',compact('faculties'));
    }

    public function create()
    {
        return view('back.faculty.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
            'faname' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
            'faname.required' => 'لطفا عنوان فارسی را وارد کنید.',
        ])->validate();

        $faculty = new Faculty();
        $faculty->faname = $request->faname;
        $faculty->enname = $request->enname;
        $faculty->save();
        return redirect()->route('faculty.index')->with('success','دانشکده جدید ثبت شد.');
    }


    public function show(Faculty $faculty)
    {
        //
    }


    public function edit(Faculty $faculty)
    {
        return view('back.faculty.edit',compact('faculty'));
    }


    public function update(Request $request, Faculty $faculty)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
            'faname' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
            'faname.required' => 'لطفا عنوان فارسی را وارد کنید.',
        ])->validate();

        $faculty->faname = $request->faname;
        $faculty->enname = $request->enname;
        $faculty->save();
        return redirect()->route('faculty.index')->with('success','تغییرات ثبت شد.');
    }


    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return back()->with('danger','دانشکده مورد نظر حذف گردید.');
    }
}
