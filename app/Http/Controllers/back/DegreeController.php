<?php

namespace App\Http\Controllers\back;

use App\Degree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DegreeController extends Controller
{

    public function index()
    {
        $degrees = Degree::latest()->paginate(20);
        return view('back.degree.index',compact('degrees'));
    }

    public function create()
    {
        return view('back.degree.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
        ])->validate();

        $degree = new Degree();
        $degree->faname = $request->faname;
        $degree->enname = $request->enname;
        $degree->save();
        return redirect()->route('degree.index')->with('success','مقطع تحصیلی جدید ثبت گردید.');
    }

    public function show(Degree $degree)
    {
        //
    }

    public function edit(Degree $degree)
    {
        return view('back.degree.edit',compact('degree'));
    }

    public function update(Request $request, Degree $degree)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
        ])->validate();

        $degree->faname = $request->faname;
        $degree->enname = $request->enname;
        $degree->save();
        return redirect()->route('degree.index')->with('success','تغییرات جدید ثبت گردید.');
    }

    public function destroy(Degree $degree)
    {
        $degree->delete();
    }
}
