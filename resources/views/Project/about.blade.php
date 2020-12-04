@extends('Project.master')
@section('title', 'AboutUs')   
@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-fluid-center" style="background-color: rgb(161, 211, 228);">
            <div class="container">
              <h1 class="display-4">Healthy Hospital</h1>
              <p class="lead">Healthy Hospital was founded in 1992, to be precise on February 2, 1992. This hospital is located in Jakarta.</p>
            </div>
        </div>
        <br>
        <div>
            <img class="mx-auto d-block w-75" src="project/depan1.jpg" class="img-fluid">
        </div>
    </div>
    <br>
    <div class="container">
        <h1 class="text-center">
            Our Facilities
        </h1>
        <br>
        <div class="card-deck">

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Medical Check Up</h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text" style="text-align:justify;">Medical Check Up are a series of routine health tests that are carried out in the hospital to check the overall health of the body and anticipate the risk of disease.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;"> The Laboratory</h5>
                    </div>
                    <div class="card-body">
                      <p class="card-text" style="text-align:justify;">The Laboratory is one of the installations in a hospital which is a support service that aims to help diagnose diseases and can help see the risk of disease so that it can be overcome early.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Pharmacy</h5>
                    </div>
                    <div class="card-body">
                      <p class="card-text" style="text-align:justify;">Pharmacy is a pharmaceutical administration facility under the leadership of a pharmacist and meets legal requirements to procure, provide, and manage all aspects of the provision of medical supplies in hospitals.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">General Polyclinic</h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text" style="text-align:justify;">General Polyclinic is medical personnel who carry out medical practices to check all possible health problems for patients in general of all ages.</p>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Children's Polyclinic</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Children's Polyclinic focuses on aspects needed by children, but also health problems in children such as diseases, disorders, allergies, and so on that can interfere with the child's development.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Internist Polyclinic</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Internist Polyclinic focuses on treating various diseases related to health problems in the internal organs that are suffered.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Dental Polyclinic</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Dental Polyclinic deals with advanced specialists from dentists who study the oral cavity in more depth, starting from the mouth jaw, gums, tooth location, and dental implants.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Obgyn's Polyclinic</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Obgyn's Polyclinic is also often referred to as Obstetrics and Gynecology. This clinic focuses on managing the mother's pregnancy process to the delivery process.</p>
                    </div>
                </div>
            </div>

            <div class="card-deck">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Radiology Polyclinic</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Radiology Polyclinic deals with medical science that uses radiation for therapy or imaging studies. Diagnostic radiation is carried out to be able to see the inside of the body without the need for invasive procedures.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Neurological Polyclinic</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Neurological Polyclinic is concerned with treating disorders of the human nervous system, where a neurologist treats adult patients by diagnosing, providing care for patients who have neurological disorders.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">CVCU Polyclinic</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Cardiacvascular Polyclinic (CVCU) is concerned with preventing, diagnosing, and treating various cardiovascular diseases such as high blood pressure to heart attacks.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div>
                        <h5 class="card-header" style="text-align:center;">Surgical Polyclinic</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="text-align:justify;">Surgical Polyclinic is a clinic that handles the treatment of diseases and wounds using the surgical method (operative).</p>
                    </div>
                </div>
            </div>
    </div>
@endsection