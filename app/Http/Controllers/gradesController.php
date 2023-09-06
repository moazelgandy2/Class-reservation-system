<?php

namespace App\Http\Controllers;

use App\Models\grades;
use App\Models\students;
use App\Models\grade_buy;
use Illuminate\Http\Request;

class gradesController extends Controller
{
    public function index()
    {
        $grades = grades::all();
        return view('users.home-page', ['grades' => $grades]);
    }
    public function show($id)
    {
        $grade = grades::find($id);
        return view('users.grade', ['grades' => $grade]);
    }
    public function contact()
    {
        return view('users.contact');
    }
    public function students()
    {
        $students = students::all();
        return view('admin.dashboard', ['students' => $students]);
    }

    // Add more controller methods for other actions if needed
}
