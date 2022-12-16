import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

class AxioGet extends Component {
  state = {
        posts: []
      }
    
      componentDidMount() {
        axios.get('http://localhost:8000/api/login')
        .then(response => {
          const posts = response.data;
          this.setState({posts});
        })
      }
   
        render(){
          return(
              <table class="table">
              <thead>
                  <tr class="bg-danger">
                      <th scope="col">PRODUCT CD</th>
                      <th scope="col">DATE OFFERED</th>
                      <th scope="col">NAME</th>
                      <th scope="col">PRODUCT_TYPE_CD</th>
                  </tr>
              </thead>
              <tbody>
                  {this.state.posts && this.state.posts.map(post => 
                      <tr>
                          <td scope="row">{post.PRODUCT_CD}</td>
                          <td>{post.DATE_OFFERED}</td>
                          <td>{post.NAME}</td>
                          <td>{post.PRODUCT_TYPE_CD}</td>
                      </tr>)}
              </tbody>
          </table>
  
          )
      }



}
  
  export default AxioGet;
  
if (document.getElementById('axioget')) {
  const Index = ReactDOM.createRoot(document.getElementById("axioget"));

  Index.render(
      <React.StrictMode>
          <AxioGet/>
      </React.StrictMode>
  )
}