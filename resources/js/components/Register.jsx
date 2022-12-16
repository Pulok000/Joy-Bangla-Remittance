import React from 'react';
import ReactDOM from 'react-dom/client';
export default function Register() {
    const [name, setName] = React.useState('');
    const [dob, setDob] = React.useState('');
    const [email, setEmail] = React.useState('');
    const [pass, setPass] = React.useState('');
    const [cPass, setCPass] = React.useState('');

    const handleSubmit = (e) => {
        e.preventDefault();
        axios.post('/api/register', {
            name: name,
            dob: dob,
            email: email,
            pass: pass,
            cPass: cPass
        }).then((response) => {
            window.location.href = '/login';
        }).catch((error) => {
            console.log(error);
        })
    }

    return (
        <div>
            <div className="col-6 m-auto">
                <form onSubmit={handleSubmit}>

                    <div className="row mb-3">
                        <label htmlFor="colFormLabel" className="col-sm-3 col-form-label col-form-label-sm">Full Name:  </label>
                        <div className="col-sm-10">
                            <input type="text" name="name" className="form-control" id="name" placeholder="name"
                                onChange={(e) => { setName(e.target.value) }} />
                        </div>
                    </div>

                    <div className="row mb-3">
                        <label htmlFor="colFormLabel" className="col-sm-4 col-form-label col-form-label-sm">Date of Birth:  </label>
                        <div className="col-sm-10">
                            <input type="date" name="dob" className="form-control" id="dob" placeholder="dob"
                                onChange={(e) => { setDob(e.target.value) }} />

                        </div>
                    </div>
                    <div className="row mb-3">
                        <label htmlFor="colFormLabel" className="col-sm-3 col-form-label col-form-label-sm">Email:  </label>
                        <div className="col-sm-10">
                            <input type="text" name="email" className="form-control" id="email" placeholder="Email"
                                onChange={(e) => { setEmail(e.target.value) }}
                            />

                        </div>
                    </div>
                    <div className="row mb-3">
                        <label htmlFor="colFormLabel" className="col-sm-5 col-form-label col-form-label-sm">Password:  </label>
                        <div className="col-sm-10">
                            <input type="password" name="pass" className="form-control" id="pass" placeholder="Password"
                                onChange={(e) => { setPass(e.target.value) }}
                            />

                        </div>
                    </div>
                    <div className="row mb-3">
                        <label htmlFor="colFormLabel" className="col-sm-3 col-form-label col-form-label-sm">Confirm Password:  </label>
                        <div className="col-sm-10">
                            <input type="password" name="cPass" className="form-control" id="cPass" placeholder="Password"
                                onChange={(e) => { setCPass(e.target.value) }}
                            />
                        </div>
                    </div>


                    <button type="submit" className="btn btn-primary" value="Submit">Sign Up</button>
                </form>
            </div>
        </div>
    )
}

if (document.getElementById('register')) {
    const Index = ReactDOM.createRoot(document.getElementById("register"));

    Index.render(
        <React.StrictMode>
            <Register />
        </React.StrictMode>
    )
}
