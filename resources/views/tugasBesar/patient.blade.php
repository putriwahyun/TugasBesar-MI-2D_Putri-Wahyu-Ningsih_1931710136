@extends('Project.master')
@section('title', 'Patients')   
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>Patient Database</h4>
                        <hr>
                    </div>
                </div>
            </div>

            <table class="table table-hover table-info">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Selected Polyclinic</th>
                    <th>Date of Checkup</th>
                </tr>
                @foreach ($data_patient as $patient)
                    <tr>
                        <td>{{ $patient -> id}}</td>
                        <td>{{ $patient -> name}}</td>
                        <td>{{ $patient -> gender}}</td>
                        <td>{{ $patient -> date_of_birth}}</td>
                        <td>{{ $patient -> address}}</td>
                        <td>{{ $patient -> select_polyclinic}}</td>
                        <td>{{ $patient -> date_of_checkup}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection