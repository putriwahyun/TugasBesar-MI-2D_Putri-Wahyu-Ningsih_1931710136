@extends('Project.master')
@section('title', 'OurDoctor')   
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Our Doctor</h4>
                <hr>
            </div>
            <div>
                @if (Auth::check())
                    <a href="/doctors" class="btn btn-primary">Add Doctor</a>
                @endif
            </div>
        </div>
        
        <div class="row">
                @foreach ($doctors as $doctor)
                        <div class="col-md-4">
                        <div class="card mb-3">
                            <img class="card-img-top" src="doctor/{{ $doctor->id }}.jpg" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">{{ $doctor->name }}</h5>
                            <p class="card-text">{{ $doctor->specialist }}</p>
                            <p class="card-text">{{ $doctor->schedule }}</p>
                            </div>
                        </div>
                        </div>
                @endforeach  
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $doctors->links() }}  
            </div>
        </div> 
    </div>
@endsection