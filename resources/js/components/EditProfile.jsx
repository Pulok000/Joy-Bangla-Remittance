import React from 'react'
import ReactDOM from 'react-dom/client'
import { useState, useEffect } from 'react'



export default function EditProfile() {
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

    const deleteUser = (id) => {
        axios.post('/api/deleteprofile', id).then((res) => {
          fetchAllUsers();
        });
      };

    


    const handledelete=() => {

        axios.post('/api/deleteprofile')
            .then(res => {
                console.log(res)
                window.location = '/login'

            })
            .catch(err => {
    
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



                        ID : {user.uid} 

                        <br/> 

                        Name : {user.uname} 

                        <br/> 
                        Email: {user.uemail}
                        <br/> 
                        Date Of Birth: {user.udob}  
                        <br/> 
                        Password: {user.upass} 
                        <button type="button" onClick= { handledelete}  className="btn btn-primary"  > Delete Profile</button>
                            


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



if (document.getElementById('editProfile')) {
    const Index = ReactDOM.createRoot(document.getElementById("editProfile"));

    Index.render(
        <React.StrictMode>
            <EditProfile/>
            
        </React.StrictMode>
    )
}



