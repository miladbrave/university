<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Photo;
use App\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UniversityController extends Controller
{

    public function index()
    {
        $universities = University::latest()->paginate(20);
        return view('back.university.index', compact('universities'));
    }

    public function create()
    {
        return view('back.university.create');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
            'encity' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'web' => 'required',
            'email' => 'required|email',
            'postcode' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
            'encity.required' => 'لطفا شهر لاتین را وارد کنید.',
            'address.required' => 'لطفا آدرس را وارد کنید.',
            'phone.required' => 'لطفا شماره تماس را وارد کنید.',
            'phone.numeric' => 'لطفا شماره تماس معتبر وارد کنید.',
            'web.required' => 'لطفا آدرس سایت را وارد کنید.',
            'email.required' => 'لطفا ایمیل را وارد کنید.',
            'email.email' => 'لطفا ایمیل معتبر را وارد کنید.',
            'postcode.required' => 'لطفا کدپستی را وارد کنید.',

        ])->validate();

        $university = new University();
        $university->faname = $request->faname;
        $university->enname = $request->enname;
        $university->facity = $request->facity;
        $university->encity = $request->encity;
        $university->address = $request->address;
        $university->phone = $request->phone;
        $university->web = $request->web;
        $university->email = $request->email;
        $university->postcode = $request->postcode;
        $university->save();
        $university->slug;

        if ($request->file('file')) {
            $uploadfile = $request->file('file');
            $filename = time() . $uploadfile->getClientOriginalName();
            $original_name = $uploadfile->getClientOriginalName();
            $uploadfile->move('photo', $filename);
            $photo = new Photo();
            $photo->original_name = $original_name;
            $photo->path = $filename;
            $photo->university_id = $university->id;
            $photo->user_id = 1;
            $photo->save();
        }
        return redirect()->route('university.index')->with('success', 'دانشگاه جدید با موفقیت ثبت شد.');
    }

    public function show(University $university)
    {
        //
    }

    public function edit(University $university)
    {
        return view('back.university.edit', compact('university'));
    }

    public function update(Request $request, University $university)
    {
        Validator::make($request->all(), [
            'enname' => 'required',
            'encity' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'web' => 'required',
            'email' => 'required|email',
            'postcode' => 'required',
        ], [
            'enname.required' => 'لطفا عنوان لاتین را وارد کنید.',
            'encity.required' => 'لطفا شهر لاتین را وارد کنید.',
            'address.required' => 'لطفا آدرس را وارد کنید.',
            'phone.required' => 'لطفا شماره تماس را وارد کنید.',
            'phone.numeric' => 'لطفا شماره تماس معتبر وارد کنید.',
            'web.required' => 'لطفا آدرس سایت را وارد کنید.',
            'email.required' => 'لطفا ایمیل را وارد کنید.',
            'email.email' => 'لطفا ایمیل معتبر را وارد کنید.',
            'postcode.required' => 'لطفا کدپستی را وارد کنید.',

        ])->validate();

        $university->faname = $request->faname;
        $university->enname = $request->enname;
        $university->facity = $request->facity;
        $university->encity = $request->encity;
        $university->address = $request->address;
        $university->phone = $request->phone;
        $university->web = $request->web;
        $university->email = $request->email;
        $university->postcode = $request->postcode;
        $university->save();
        $university->slug;

        if ($request->file('file')) {
            $uploadfile = $request->file('file');
            $filename = time() . $uploadfile->getClientOriginalName();
            $original_name = $uploadfile->getClientOriginalName();
            $uploadfile->move('photo', $filename);
            $photo = new Photo();
            $photo->original_name = $original_name;
            $photo->path = $filename;
            $photo->university_id = $university->id;
            $photo->user_id = 1;
            $photo->save();
        }
        return redirect()->route('university.index')->with('success', 'تغییرات با موفقیت ثبت شد.');

    }

    public function destroy(University $university)
    {
        $photo = $university->photo;
        if ($photo) {
            unlink(getcwd() . $photo->path);
            $photo->delete();
        }
        $university->delete();
        return redirect()->route('university.index')->with('danger','دانشگاه مورد نظر حذف گردید.');
    }

    public function photoDelete($id)
    {
        $photo = Photo::whereId($id)->first();
        if ($photo) {
            unlink(getcwd() . $photo->path);
            $photo->delete();
        }
        return back();
    }
}
