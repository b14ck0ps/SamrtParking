@extends('layouts.app')
@section('content')
    <h3 class="text-center m-3">Book any of our parking services</h3>

    <div class="d-flex justify-content-center mt-5 flex-wrap">

        <div class="card m-5" style="width: 18rem;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Subterranean_parking_lot.jpg/1280px-Subterranean_parking_lot.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">1st Floor Park</h5>
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-money-check-dollar"></i> 5$ /Hour</li>
                    <li><i class="fa-solid fa-location-dot"></i> 1A</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="p-2 rounded text-decoration-none btn-info">Reserve</a>
                    <input type="number" name="duration" id="duration" class="form-control w-50" placeholder="Duration">
                </div>
            </div>
        </div>
        <div class="card m-5" style="width: 18rem;">
            <img src="https://www.middleeast.weber/files/sodamco/styles/1920x1080_resize/public/2018-05/Parking_floor_solutions_under_commercial_landmark3.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ground Floor Park</h5>
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-money-check-dollar"></i> 5$ /Hour</li>
                    <li><i class="fa-solid fa-location-dot"></i> 1B</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="p-2 rounded text-decoration-none btn-info">Reserve</a>
                    <input type="number" name="duration" id="duration" class="form-control w-50" placeholder="Duration">
                </div>
            </div>
        </div>

    </div>
@endsection
