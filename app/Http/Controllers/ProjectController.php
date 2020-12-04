<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Patient;


class ProjectController extends Controller
{
    public function home()
    {
        return view('Project.home');
    }
    public function about()
    {
        return view('Project.about');
    }
    public function service()
    {
        return view('Project.service');
    }
    public function doctor()
    {
        $doctors = Doctor::paginate(3);
        return view('Project.doctor', ['doctors' => $doctors]);
    }
    public function login()
    {
        return view('Project.login');
    }
    public function registration()
    {
        return view('Project.registration');
    }
    public function postRegistration(Request $request)
    {
        Patient::create($request->all());
        return redirect('/registration')->with('success', 'Input Data has Succesfully!');
    }
    public function information()
    {
        return view('Project.information');
    }
    public function ambulance()
    {
        return view('Project.ambulance');
    }
    public function patient()
    {
        $data_patient = Patient::all();
        return view('tugasBesar.patient', ['data_patient' => $data_patient]);
    }
}
