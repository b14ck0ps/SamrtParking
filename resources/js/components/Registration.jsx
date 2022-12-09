import React from 'react'
import ReactDOM from 'react-dom/client'
import { useState } from 'react';
export default function Registration() {

    const [name, setName] = useState('');
    const [vehicle_name, setVehicleName] = useState('');
    const [phone, setPhone] = useState('');
    const [email, setEmail] = useState('');
    const [type, setType] = useState('');
    const [password, setPassword] = useState('');
    const [password_confirmation, setPasswordConfirmation] = useState('');

    const [err, setErr] = useState([])

    const handleSubmit = (e) => {
        e.preventDefault();
        const data = { name, vehicle_name, phone, email, type, password, password_confirmation };
        axios.post('/api/registration', data)
            .then(res => {
                type === 'admin' ? window.location = '/admin' : window.location = '/home'
            })
            .catch(err => {
                if (err.response.data) {
                    setErr(err.response.data.errors)
                }
            })
    }


    return (
        <div>
            <div className="container h-100 mt-5">
                <div className="row h-100 justify-content-center align-items-center card p-5">
                    <h3 className='text-center mb-5'>Registration</h3>
                    <form className="col-6" onSubmit={handleSubmit}>
                        <div className="form-group">
                            <label htmlFor="inputEmail">Name</label>
                            <input type="text" className="form-control" placeholder="Name" name="name"
                                onChange={(e) => setName(e.target.value)}
                            />
                            {err.name && <p className="text-danger">{err.name[0]}</p>}
                        </div>
                        <div className="form-group">
                            <label htmlFor="inputEmail">Vehical Name</label>
                            <input type="text" className="form-control" placeholder="Vehical Name"
                                name="vehicle_name"
                                onChange={(e) => setVehicleName(e.target.value)}
                            />
                            {err.vehicle_name && <p className="text-danger">{err.vehicle_name[0]}</p>}
                        </div>
                        <div className="form-group">
                            <label htmlFor="inputEmail">Phone</label>
                            <input type="number" className="form-control" placeholder="Phone" name="phone"
                                onChange={(e) => setPhone(e.target.value)}
                            />
                            {err.phone && <p className="text-danger">{err.phone[0]}</p>}
                        </div>
                        <div className="form-group">
                            <label htmlFor="inputEmail">Email</label>
                            <input type="email" className="form-control" placeholder="Email" name="email"
                                onChange={(e) => setEmail(e.target.value)}
                            />
                            {err.email && <p className="text-danger">{err.email[0]}</p>}
                        </div>
                        <div className="form-group">
                            <label htmlFor="inputEmail">User type</label>
                            <select className="form-control" name="type"
                                onChange={(e) => setType(e.target.value)}
                            >
                                <option value="customer">Customer</option>
                                <option value="admin">Admin</option>
                            </select>
                            {err.type && <p className="text-danger">{err.type[0]}</p>}

                        </div>
                        <div className="form-group">
                            <label htmlFor="inputPassword">Password</label>
                            <input type="password" className="form-control" placeholder="Password" name="password"
                                onChange={(e) => setPassword(e.target.value)}
                            />
                            {err.password && <p className="text-danger">{err.password[0]}</p>}
                        </div>
                        <div className="form-group">
                            <label htmlFor="inputPassword">Confirm Password</label>
                            <input type="password" className="form-control" placeholder="Confirm Password"
                                name="password_confirmation"
                                onChange={(e) => setPasswordConfirmation(e.target.value)}
                            />
                            {err.password_confirmation && <p className="text-danger">{err.password_confirmation[0]}</p>}
                        </div>
                        <button type="submit" className="mt-3 btn btn-primary">Registration</button>
                    </form>
                </div>
            </div>
        </div>
    )
}


if (document.getElementById('registration')) {
    const Index = ReactDOM.createRoot(document.getElementById("registration"));

    Index.render(
        <React.StrictMode>
            <Registration />
        </React.StrictMode>
    )
}
