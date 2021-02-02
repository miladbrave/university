<?php

namespace App\Http\Controllers\back;

use App\Cuorse;
use App\Http\Controllers\Controller;
use App\Program;
use App\University;
use App\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $university = University::count();
        $program = Program::count();
        $courses = Cuorse::count();
        $users = User::count();
        return view('back.dashboard',compact('university','program','courses','users'));
    }

}
