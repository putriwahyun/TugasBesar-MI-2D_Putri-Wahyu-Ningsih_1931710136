@extends('Project.master')
@section('title', 'Service')   
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Our Service</h4>
                <hr>
            </div>
        </div>
        <div class="card-deck">
        <div class="col-md-6">
            <div class="card mb-3">
                <img class="card-img-top" src="project/recepcionist.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="text-align:center;">Information center</h5>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card mb-3">
            <img class="card-img-top" src="project/laboratory.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="text-align:center;">Laboratory</h5>
            </div>
            </div>
        </div>
        </div>

        <div class="card-deck">
        <div class="col-md-6">
            <div class="card mb-3">
                <img class="card-img-top" src="project/operatingRoom.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="text-align:center;">Operating Room</h5>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <img class="card-img-top" src="project/NICU.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title" style="text-align:center;">NICU (Neonatal Intensive Care Unit)</h5>
                </div>
            </div>
        </div>
        </div>

        <div class="card-deck">
            <div class="col-md-6">
                <div class="card mb-3">
                    <img class="card-img-top" src="project/radiologi.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title" style="text-align:center;">Radiology</h5>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="card mb-3">
                    <img class="card-img-top" src="project/hemodyalisis.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title" style="text-align:center;">Hemodyalisis</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection