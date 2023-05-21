<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;


class StudentController extends Controller
{

    public function getAllStudents()
    {
        $students = Student::all();
        return StudentResource::collection($students);
    }

    public function addStudent()
    {
        request()->validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Indeks' => 'required',
        ]);
        return Student::create([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Indeks' => request('Indeks'),
        ]);
    }


    public function deleteStudent(Student $student)
    {
        $success = $student->delete();

        return [
            'success' => $success
        ];

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}