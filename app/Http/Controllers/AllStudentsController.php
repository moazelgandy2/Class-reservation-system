<?php

namespace App\Http\Controllers;

use App\Models\ShowStudents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AllStudentsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $searchOption = $request->input('search_option');

        $query = ShowStudents::query();

        if (!empty($search)) {
            if ($searchOption === 'name') {
                $query->where(function ($query) use ($search) {
                    $query->where('first_name', 'LIKE', '%' . $search . '%')
                        ->orWhere('last_name', 'LIKE', '%' . $search . '%')
                        ->orWhereRaw("CONCAT(first_name, ' ', last_name) LIKE ?", ['%' . $search . '%']);
                });
            } elseif ($searchOption === 'grade') {
                $query->where('grade', 'LIKE', '%' . $search . '%');
            }
        }
        $data = $query->orderBy('id', 'ASC')->get();
        $grades = Session::get('grades');
        $dataCount = $data->countBy(function ($student) {
            return $student->grade;
        });
        return view("admin.dashboard", compact('data', 'grades', 'dataCount'));
    }
}
