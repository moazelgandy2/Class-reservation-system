<?php

namespace App\Http\Controllers;

use App\Models\ShowStudents;
use Illuminate\Http\Request;

class countGrade extends Controller
{
    public static function index()
    {
        $grade = 2;
        $count = ShowStudents::where('grade', $grade)->count();
        return view('count_page', compact('count'));
    }
}
