@extends('Project.master')
@section('title', 'Registration')   
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Registration of Patient</h4>
                <hr>
            </div>
            <div>
                @if (Auth::check())
                    <a href="/patients" class="btn btn-primary">Data Patient</a>
                @endif
            </div>
        </div>
        <br>
        
        @if (session('success'))
            <div class="mx-auto d-block w-50">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5 class="text-center"><strong>Success!!</strong> New Patient was succesfully Added!!</h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif
        </div>
        @if (Auth::check())
        <div class="mx-auto d-block w-50" style="background-color: rgb(144, 209, 231)">
            <div class="mx-auto d-block w-50">
                <div class="col-mb-4">
                    <br>
                    <form action="/registration" method="POST">
                        {{csrf_field()}}
                        <h3 class="text-center"><strong>Registration Form</strong></h3>
                        <br>
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
                            <label for="exampleFormControlSelect1">Select Polyclinic</label>
                            <select name="select_polyclinic" class="form-control" id="exampleFormControlSelect1">
                              <option>General Polyclinic</option>
                              <option>Children's Polyclinic</option>
                              <option>Internist Polyclinic</option>
                              <option>Dental Polyclinic</option>
                              <option>Obgyn's Polyclinic</option>
                              <option>Radiology Polyclinic</option>
                              <option>Neurological Polyclinic</option>
                              <option>CVCU Polyclinic</option>
                              <option>Surgical Polyclinic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date of Check Up</label>
                            <input name="date_of_checkup" type="text" class="date form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                          
                        <script type="text/javascript">
                            $('.date').datepicker({  
                               format: 'dd-mm-yyyy'
                             });  
                        </script> 
                          
                        </body>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#exampleModal">
                                Register
                            </button>
                        </div>
                        <br>
                    </form> 
                </div>
            </div>
            </div>
        @else
            <div class="mx-auto d-block w-75" style="background-color: rgb(144, 209, 231)">
                <br>
                    <div class="col-mb-4">
                        <h3 class="text-center"><strong>We're sorry, you must login first.</strong></h3>
                    </div>
                <br>
            </div>
        @endif
    </div>
@endsection