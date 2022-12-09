import React from 'react'
import ReactDOM from 'react-dom/client'
import { useState, useEffect } from 'react';
import TimePicker from 'react-time-picker';
export default function Park() {

    const [vehicle_number, setLicence] = useState('01:00')
    const [parking_slot, setParkingSlot] = useState('')
    const [duration, setDuration] = useState('')

    const handleSubmit = (e) => {
        e.preventDefault();
        const data = { vehicle_number, parking_slot, duration }
        axios.post('/api/book', data).
            then(res => {
                window.location.href = '/home'
            })
    }

    return (
        <div>
            <h3 className="text-center m-3">Book any of our parking services</h3>
            <div className="d-flex justify-content-center mt-3 flex-wrap">

                <div className="card m-5" style={{ width: 18 + 'rem' }}>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Subterranean_parking_lot.jpg/1280px-Subterranean_parking_lot.jpg"
                        className="card-img-top" alt="..." />
                    <div className="card-body">
                        <h5 className="card-title">1st Floor Park</h5>
                        <div className="d-flex justify-content-between align-items-center">
                            <ul className="list-unstyled">
                                <li><i className="fa-solid fa-money-check-dollar"></i> 5$ /Hour</li>
                                <li><i className="fa-solid fa-location-dot"></i> 1A</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div className="card m-5" style={{ width: 18 + 'rem' }}>
                    <img src="https://www.middleeast.weber/files/sodamco/styles/1920x1080_resize/public/2018-05/Parking_floor_solutions_under_commercial_landmark3.jpg"
                        className="card-img-top" alt="..." />
                    <div className="card-body">
                        <h5 className="card-title">Ground Floor Park</h5>
                        <ul className="list-unstyled">
                            <li><i className="fa-solid fa-money-check-dollar"></i> 5$ /Hour</li>
                            <li><i className="fa-solid fa-location-dot"></i> 1B</li>
                        </ul>
                    </div>
                </div>

            </div>

            <form onSubmit={handleSubmit} >
                <div className="container w-50 d-flex mt-5 justify-content-around align-items-center">
                    <input type="text" name="vehicle_number" id="duration" className="form-control w-25" placeholder="Licence"
                        onChange={(e) => setLicence(e.target.value)}
                    />
                    <div>
                        <select
                            onClick={(e) => setParkingSlot(e.target.value)}
                            name="parking_slot" className="form-control">
                            <option value="1A">1A</option>
                            <option value="1B">1B</option>
                        </select>
                    </div>
                    <TimePicker format='h:m' onChange={setDuration} value={duration} />
                    <button type="submit" className="btn rounded text-decoration-none btn-info p-2">Reserve</button>
                </div>
            </form>
        </div>
    )

}

if (document.getElementById('park')) {
    const Index = ReactDOM.createRoot(document.getElementById("park"));

    Index.render(
        <React.StrictMode>
            <Park />
        </React.StrictMode>
    )
}
