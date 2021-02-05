<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Photo;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{

    public function index()
    {
        $setting = Setting::latest()->first();
        return view('back.setting.index', compact('setting'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $setting = Setting::latest()->first();

        Validator::make($request->all(), [
            'word' => 'numeric',
            'pdf' => 'numeric',
            'time' => 'numeric',
            'phone' => 'numeric',
            'email' => 'email',

        ], [
            'word.required' => 'لطفا مقدار معتبر را وارد کنید.',
            'pdf.required' => 'لطفا مقدار معتبر را وارد کنید.',
            'time.required' => 'لطفا مقدار معتبر را وارد کنید.',
            'phone.required' => 'لطفا مقدار معتبر را وارد کنید.',
            'email.required' => 'لطفا ایمیل معتبر را وارد کنید.',

        ])->validate();

        if ($setting) {
            $setting->word_price = $request->word;
            $setting->pdf_price = $request->pdf;
            $setting->titlefile = $request->titlefile;
            $setting->guide = $request->guide;
            $setting->description = $request->description;
            $setting->description2 = $request->description2;
            $setting->time = $request->time;
            $setting->phone = $request->phone;
            $setting->email = $request->email;
            $setting->telegram = $request->telegram;
            $setting->whats = $request->whats;
            $setting->sitename = $request->sitename;
            $setting->sitedes = $request->sitedes;
            $setting->gatedriver = $request->dirver;
            $setting->gatemode = $request->mode;
            $setting->gatemerchand = $request->merchand;
            $setting->save();

            if ($request->file('file')) {
                $uploadfile = $request->file('file');
                $filename = time() . $uploadfile->getClientOriginalName();
                $original_name = $uploadfile->getClientOriginalName();
                $uploadfile->move('photo', $filename);
                $photo = new Photo();
                $photo->original_name = $original_name;
                $photo->path = $filename;
                $photo->site_id = $setting->id;
                $photo->user_id = 1;
                $photo->save();
            }
        }else{
            $setting = new Setting();
            $setting->word_price = $request->word;
            $setting->pdf_price = $request->pdf;
            $setting->titlefile = $request->titlefile;
            $setting->guide = $request->guide;
            $setting->description = $request->description;
            $setting->description2 = $request->description2;
            $setting->time = $request->time;
            $setting->phone = $request->phone;
            $setting->email = $request->email;
            $setting->telegram = $request->telegram;
            $setting->whats = $request->whats;
            $setting->sitename = $request->sitename;
            $setting->sitedes = $request->sitedes;
            $setting->gatedriver = $request->dirver;
            $setting->gatemode = $request->mode;
            $setting->gatemerchand = $request->merchand;
            $setting->save();

            if ($request->file('file')) {
                $uploadfile = $request->file('file');
                $filename = time() . $uploadfile->getClientOriginalName();
                $original_name = $uploadfile->getClientOriginalName();
                $uploadfile->move('photo', $filename);
                $photo = new Photo();
                $photo->original_name = $original_name;
                $photo->path = $filename;
                $photo->site_id = $setting->id;
                $photo->user_id = 1;
                $photo->save();
            }

        }
        return redirect()->route('setting.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function adminlist()
    {
        $users = User::latest()->paginate(20);
        return view('back.setting.admin', compact('users'));
    }

    public function adminchange($id)
    {
        $user = User::find($id);
        $user->admin = "admin";
        $user->save();
        return redirect()->route('adminList');
    }

    public function userdestroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('adminList');
    }
}
