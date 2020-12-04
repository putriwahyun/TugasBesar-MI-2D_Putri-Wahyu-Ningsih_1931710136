@extends('Project.master')
@section('title', 'Edit Doctor')   
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Edit Data Doctor</h4>
            <hr>
        </div>
    </div>
    <br>

        @if (session('success'))
            <div class="mx-auto d-block w-50">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5 class="text-center"><strong>Success!</strong> Your Data Has Been Update Successfully!!</h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        <div class="mx-auto d-block w-50" style="background-color: rgb(144, 209, 231)">
        <div class="mx-auto d-block w-50">
            <div class="col-mb-4">
            <form action="/doctor/{{$doctor -> id}}/update" method="POST">
                {{csrf_field()}}
                <br>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{$doctor -> name}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Gender</label>
                    <select name="gender" class="form-control" id="exampleFormControlSelect1">
                      <option value="Laki-laki" @if ($doctor -> gender == 'Laki-laki') selected @endif>Laki-laki</option>
                      <option value="Perempuan" @if ($doctor -> gender == 'Perempuan') selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input name="date_of_birth" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Indonesia, 23 June 2020" value="{{$doctor -> date_of_birth}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="2">{{$doctor -> address}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Specialist</label>
                  <input name="specialist" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Dentist" value="{{$doctor -> specialist}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Schedule</label>
                    <textarea name="schedule" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$doctor -> schedule}}</textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-warning">
                        Update
                    </button>
                </div>
                
            <br>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection