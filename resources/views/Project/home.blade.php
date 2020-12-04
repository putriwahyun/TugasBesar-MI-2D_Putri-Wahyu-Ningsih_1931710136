@extends('Project.master')
@section('title', 'Home')   
@section('content')

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="mx-auto d-block w-75"  src="project/depan1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="mx-auto d-block w-75" src="project/depan2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="mx-auto d-block w-75" src="project/depan3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    <br>

    <div class="container">
        <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="project/icon1.png" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title" style="text-align:center;">Online Registration</h5>
            <p class="card-text" style="text-align:justify;">Before the patient check up offline on our hospital, you can register first to get queue number.</p>
            <div class="text-center">
                <a href="registration" class="btn btn-primary">Go Registration</a>
            </div>
            
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="project/icon2.png" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title" style="text-align:center;">Information Center</h5>
            <p class="card-text" style="text-align:justify;">To get more information about the schedule of doctor and the hospital, you can ask in information center.</p>
            <div class="text-center">
                <a href="/information" class="btn btn-primary">Go Information Center</a>
            </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="project/icon3.png" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title" style="text-align:center;">Emergency Ambulance</h5>
            <p class="card-text" style="text-align:justify;">There is emergency ambulance for our patient, we can pick up and drop off patient carefully.</p>
            <div class="text-center">
                <a href="/ambulance" class="btn btn-primary">Go Ambulance</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="card">
        <div class="card-header">
            Quote of the day
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>"From the bitterness of disease man learns the sweetness of health."</p>
            <footer class="blockquote-footer">By <cite title="Source Title">Catalan Proverb</cite></footer>
            </blockquote>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>"It’s more difficult to make healthy people rather than making them sick."</p>
            <footer class="blockquote-footer">By <cite title="Source Title">De Forest Clinton Jarvis</cite></footer>
            </blockquote>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>"Resting when you are tired. Refresh and renew themselves, body, mind, and spirit. Then back to work."</p>
            <footer class="blockquote-footer">By <cite title="Source Title">Ralph Marston</cite></footer>
            </blockquote>
        </div>
        </div>
        </div>
        
@endsection