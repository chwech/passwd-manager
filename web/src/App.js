import React, { Component } from 'react';
import './App.css';
import Login from './views/login'
class App extends Component {
  handleClick () {
    console.log('click')
  }
  render() {
    return ( 
      <div className="App">
        <Login></Login>
      </div>
    );
  }
}

export default App;