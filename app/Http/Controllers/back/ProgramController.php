<?php

namespace App\Http\Controllers\back;

use App\Cuorse;
use App\Http\Controllers\Controller;
use App\Program;
use App\ProgramCours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(20);
        return view('back.program.index',compact('programs'));
    }

    public function create()
    {
        $courses = Cuorse::latest()->get();
        return view('back.program.create',compact('courses'));
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
        ])->validate();

        $program = new Program();
        $program->faname = $request->faname;
        $program->enname = $request->enname;
        $program->save();

        foreach ($request->precourse as $precours) {
            ProgramCours::create([
                "program_id" => $program->id,
                "program_course_id" => $precours,
            ]);
        }
        return redirect()->route('program.index')->with('success','رشته تحصیلی جدید ثبت شد.');
    }

    public function show(Program $program)
    {
        //
    }

    public function edit(Program $program)
    {
        $courses = Cuorse::latest()->get();
        return view('back.program.edit',compact('program','courses'));
    }

    public function update(Request $request, Program $program)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
        ])->validate();

        $program->faname = $request->faname;
        $program->enname = $request->enname;
        $program->save();

        $program->programcourse()->delete();
        foreach ($request->precourse as $precours) {
            $program->programcourse()->updateOrCreate([
                "program_id" => $program->id,
                "program_course_id" => $precours,
            ]);
        }

        return redirect()->route('program.index')->with('success','تغییرات ثبت شد.');
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return back()->with('danger','رشته تحصیلی مورد نظر حذف شد.');
    }
}
