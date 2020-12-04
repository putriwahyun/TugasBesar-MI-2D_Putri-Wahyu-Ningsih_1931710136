@extends('Project.master')
@section('title', 'Doctors')   
@section('content')
<div class="container">
        @if (session('success'))
            <div class="mx-auto d-block w-50">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5 class="text-center"><strong>Success!</strong> Your Data Has Been Added Successfully!!</h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        @if (session('delsuccess'))
            <div class="mx-auto d-block w-50">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5 class="text-center"><strong>Success!</strong> Your Data Has Been Delete Successfully!!</h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>Doctor Database</h4>
                        <hr>
                    </div>
                    <div >
                        <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#exampleModal">
                            Create New Data
                        </button>
                    </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input New Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="/doctor/create" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Gender</label>
                                    <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                      <option>Laki-laki</option>
                                      <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date of Birth</label>
                                    <input name="date_of_birth" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Malang, 23 June 2020">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Address</label>
                                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Specialist</label>
                                  <input name="specialist" type="text" class="form-control" id="exampleInputEmail1" 
                                  aria-describedby="emailHelp" placeholder="Ex: Dentist">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Schedule</label>
                                    <textarea name="schedule" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>
                        </div>
                    </div>
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
                    <th>Specialist</th>
                    <th>Schedule</th>
                    <th>Action</th>
                </tr>
                @foreach ($data_doctor as $doctor)
                    <tr>
                        <td>{{ $doctor -> id}}</td>
                        <td>{{ $doctor -> name}}</td>
                        <td>{{ $doctor -> gender}}</td>
                        <td>{{ $doctor -> date_of_birth}}</td>
                        <td>{{ $doctor -> address}}</td>
                        <td>{{ $doctor -> specialist}}</td>
                        <td>{{ $doctor -> schedule}}</td>
                        <td>
                            <a href="/doctor/{{$doctor -> id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/doctor/{{$doctor -> id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
