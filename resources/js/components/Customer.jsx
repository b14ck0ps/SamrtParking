import React from 'react'
import ReactDOM from 'react-dom/client'
import { useState, useEffect } from 'react';
export default function Customer() {

    const [customers, setCustomers] = useState([]);

    useEffect(() => {
        axios.get('/api/customers').then((response) => {
            setCustomers(response.data);
        });
    }, []);

    const handleDelete = (id) => {
        axios.delete('/api/customer/' + id).then((response) => {
            const newCustomers = customers.filter((customer) => customer.id !== id);
            setCustomers(newCustomers);
        });
    };

    return (
        <div>
            <div className="container">
                <div className="table-responsive">
                    <h3 className="text-center my-5">List of Customers</h3>
                    <table className="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Car</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {customers.map((customer) => (
                                <tr key={customer.id} >
                                    <th scope="row">{customer.id}</th>
                                    <td>{customer.name}</td>
                                    <td>{customer.email}</td>
                                    <td>{customer.phone}</td>
                                    <td>{customer.vehicle_name}</td>
                                    <td>
                                        <button className="btn btn-danger" onClick={() => handleDelete(customer.id)}>Delete</button>
                                    </td>
                                </tr>
                            ))}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    )
}


if (document.getElementById('customerList')) {
    const Index = ReactDOM.createRoot(document.getElementById("customerList"));

    Index.render(
        <React.StrictMode>
            <Customer />
        </React.StrictMode>
    )
}
