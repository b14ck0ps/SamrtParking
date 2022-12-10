import React from 'react';
import ReactDOM from 'react-dom/client';
import { useState } from 'react';
function Login() {

    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');

    const [err, setErr] = useState(false)

    const handleSubmit = (e) => {
        e.preventDefault()
        const data = { email, password }
        axios.post('/api/login', data)
            .then(res => {
                console.log(res.data)
                if (res.data.user) {
                    window.location = '/home'
                }
            }).catch(err => {
                setErr(true)
            })
    }

    return (
        <div className="container">
            <div className="container h-100 mt-5">
                <div className="row h-100 justify-content-center align-items-center  card p-5">
                    <form className="col-6" onSubmit={handleSubmit} >
                        <h3 className='text-center'>LOGIN</h3>
                        {err && <div className="alert alert-danger" role="alert"> Invalid email or password </div>}

                        <div className="form-group">
                            <label htmlFor="inputEmail">Email</label>
                            <input type="email" className="form-control" id="inputEmail" placeholder="Email" name="email"
                                onChange={(e) => setEmail(e.target.value)}
                            />
                        </div>
                        <div className="form-group">
                            <label htmlFor="inputPassword">Password</label>
                            <input type="password" className="form-control" id="inputPassword" placeholder="Password" name="password"
                                onChange={(e) => setPassword(e.target.value)}
                            />
                        </div>
                        <div className="form-group">
                            <label className="form-check-label"><input type="checkbox" /> Remember me</label>
                        </div>
                        <button type="submit" className="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    );
}

export default Login;

if (document.getElementById('login')) {
    const Index = ReactDOM.createRoot(document.getElementById("login"));

    Index.render(
        <React.StrictMode>
            <Login />
        </React.StrictMode>
    )
}
