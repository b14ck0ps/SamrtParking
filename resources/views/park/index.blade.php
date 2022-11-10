@extends('layouts.app')
@section('content')
    <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />
    <h3 class="text-center m-3">Book any of our parking services</h3>
    <div class="d-flex justify-content-center mt-3 flex-wrap">

        <div class="card m-5" style="width: 18rem;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Subterranean_parking_lot.jpg/1280px-Subterranean_parking_lot.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">1st Floor Park</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="list-unstyled">
                        <li><i class="fa-solid fa-money-check-dollar"></i> 5$ /Hour</li>
                        <li><i class="fa-solid fa-location-dot"></i> 1A</li>
                    </ul>
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
            </div>
        </div>

    </div>
    <!-----info----->
    <form action="{{ route('book') }}" method="POST">
        @csrf
        <div class="container w-50 d-flex mt-5 justify-content-around align-items-center">
            <input type="text" name="vehicle_number" id="duration" class="form-control w-25" placeholder="Licence">
            <div>
                <select name="parking_slot" class="form-control">
                    <option value="1A">1A</option>
                    <option value="1B">1B</option>
                </select>
            </div>
            <input type="text" name="duration" id="time" class="form-control w-25 " placeholder="Duration">
            <button type="submit" class=" rounded text-decoration-none btn-info p-2">Reserve</button>
        </div>
    </form>
    <!-----info----->
    <!-----Time JS----->
    <script>
        var timepicker = new TimePicker('time', {
            lang: 'en',
            theme: 'dark'
        });
        timepicker.on('change', function(evt) {

            var value = (evt.hour || '00') + ':' + (evt.minute || '00');
            evt.element.value = value;

        });
    </script>
@endsection
