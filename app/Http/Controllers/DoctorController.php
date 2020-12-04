<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $data_doctor = Doctor::all();
        return view('tugasBesar.doctor', ['data_doctor' => $data_doctor]);
    }
    public function create(Request $request)
    {
        Doctor::create($request->all());
        return redirect('/doctors')->with('success', 'Input Data has Succesfully!');
    }
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('tugasBesar.editDoctor', ['doctor' => $doctor]);
    }
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor -> update($request->all());
        return redirect('/doctors')->with('success', 'Update Data has Succesfully!');
    }
    public function delete($id)
    {
        $doctor = Doctor::find($id);
        $doctor -> delete();
        return redirect('/doctors')->with('delsuccess', 'Delete Data has Succesfully!');
    }
}
