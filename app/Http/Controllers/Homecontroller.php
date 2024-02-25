<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data['students'] = DB::table('students')->get();
        return view('home', $data);
    }

    public function create()
    {
        return view('students-create');
    }
    
    public function store(Request $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['father_name'] = $request->father_name;
        $data['phone'] = $request->phone;
        $data['student_class'] = $request->student_class;
        $data['duration'] = $request->duration . ' ' . $request->duration_type;
        $data['created_at'] = now();
        DB::table('students')->insert($data);
        return redirect()->route('home.page');
    }

    public function delete($id)
    {
        dd($id);
    }
}
