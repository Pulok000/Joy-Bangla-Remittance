import React from 'react'
import ReactDOM from 'react-dom/client'
import { useState, useEffect } from 'react'



export default function UpdateProfile() {
    const [id, setId] = React.useState('');

    const [user, setUser] = useState({
        uname: '',
        uid: '',
        uemail: '',
        udob: '',
        upass: '',

    })



    useEffect(() => {
        axios.get('/api/profile')
            .then(res => {
                setUser(res.data)
            })
            .catch(err => {
    
            })
    }, [])




    const handleChange = (e) => {
        setUser({
            ...user,
            [e.target.name]: e.target.value
        })
    }


    return (
        

        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header  " ><h1> {user.uname}  </h1></div>

                        <div className="m-auto">

                        <br/> 
                        <br/>
                        <br/> 




                        <div>

                                    
                        </div>

                        </div>

                        <br/> 
                        <br/>
                        <br/> 


                        



                        




                    </div>
                </div>
            </div>
        </div>


    );
}



if (document.getElementById('updateProfile')) {
    const Index = ReactDOM.createRoot(document.getElementById("updateProfile"));

    Index.render(
        <React.StrictMode>
            <UpdateProfile/>
            
        </React.StrictMode>
    )
}



