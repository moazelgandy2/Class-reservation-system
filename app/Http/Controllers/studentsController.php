<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class studentsController extends Controller
{
    public function store(Request $req)
    {
        $existingStudent = students::where('phone_number', $req->phone_number)
            ->where('first_name', $req->first_name)
            ->where('last_name', $req->last_name)
            ->first();

        if ($existingStudent) {
            return redirect('/')->with('error', 'Student already exist');
        }

        $student = new students;
        $student->first_name = $req->first_name;
        $student->last_name = $req->last_name;
        $student->phone_number = $req->phone_number;
        $student->email = $req->degree;
        $student->address = $req->address;
        $grade = $req->grade;
        $student->grade = $grade;
        $student->save();

        return redirect('/')->with('status', 'Successfully enrolled');
    }
}
