<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index() {
        $students = DB::table('students')->get();
        return view('students', compact('students'));
    }


    public function add() {
        return view('studentadd');
    }

    // public function store(Request $request) {

    //     $data = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //     ];

    //     $result = DB::table('students')->insert($data);
    //     return redirect()->route('student.add');
    // }


    public function edit($id) {

        $student = DB::table('students')->find($id);

        return view('studentedit', compact('student'));
    }
        


    public function store(Request $request) {
        $id = $request->id;
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ];

        DB::table('students')->updateOrInsert(['id' => $id], $data);

        return redirect()->route('student.show');

    }

}

