<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Student $student) {
        return view('TokoIBIK.modules.student.index', [
            "data" => $student->all()
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            "fullname"=> "required|max:30",
            "npm" => "required|max:30",
            "email" => "required|max:30",
            "prodi" => "required|max:30",
        ]);

        Student::create($validateData);

        return redirect('/') -> with('success', "Data Sukses Disimpan");
    }

    public function edit(Student $student){
        return view('TokoIBIK.modules.student.edit', [
            "student" => $student
        ]);
    }

    public function update(Request $request, Student $student){
        $validateData = $request->validate([
            "fullname"=> "required|max:25",
            "npm" => "required|max:30",
            "email" => "required|max:30",
            "prodi" => "required|max:30",
        ]);

        $student -> where("id", $student-> id) -> update($validateData);

        return redirect('/') -> with('success', "Data Sukses Diedit");
    }

    public function destroy(Student $student){
        $student->delete($student->id);
        return redirect('/')->with('success', "Data Berhasil Dihapus");
    }

    public function getDataByID(Student $student) {
        return view('TokoIBIK.modules.student.show', [
            "data" => $student
        ]);
    }
}
