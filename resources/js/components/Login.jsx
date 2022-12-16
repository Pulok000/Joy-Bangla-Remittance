import React from 'react'
import ReactDOM from 'react-dom/client'
import { useState } from 'react'
export default function Login() {
    const [email, setEmail] = useState('')
    const [password, setPassword] = useState('')

    const [error, setError] = useState('')

    const handleSubmit = (e) => {
        e.preventDefault()
        axios.post('/api/login', {
            email: email,
            password: password
        }).then(function (response) {
            if (response.status === 200) {
                window.location.href = "/userDashboard"
            }

        })
            .catch(function (error) {
                setError(error.response.data.message)
                console.log(error.response.data.message);
            });
    }
    return (
        <div>
            <div className="col-3 m-auto p-5">

                <div className="center">
                    <h1 className='text-center p-4'>Login</h1>
                    {error && <div className="alert alert-danger text-center" role="alert">{error}</div>}

                    <form onSubmit={handleSubmit}>
                        <div className="mb-3">
                            <label htmlFor="exampleInputEmail1" className="form-label">Email address</label>
                            <input type="email" name="email" className="form-control" id="email" onChange={(e) => setEmail(e.target.value)} />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="exampleInputPassword1" className="form-label">Password</label>
                            <input type="password" name="password" className="form-control" id="password" onChange={(e) => setPassword(e.target.value)} />
                        </div>
                        <button type="submit" className="btn btn-primary">Login</button>
                    </form>
                </div>
            </div >
        </div >
    )
}


if (document.getElementById('login')) {
    const Index = ReactDOM.createRoot(document.getElementById("login"));

    Index.render(
        <React.StrictMode>
            <Login />
        </React.StrictMode>
    )
}
