import React, {
  Component
} from 'react';
import {
  Button
} from 'antd';
import './App.css';
import store from './redux/store'
console.log(store.getState())

class App extends Component {
  handleClick () {
    console.log('click')
    store.dispatch({
      type: 'increment',
      counterCaption: 'First'
    })
  }
  render() {
    return ( 
      <div className="App">
        <Button type="primary" onClick={this.handleClick.bind(this)}>{store.getState().First}</Button>
      </div>
    );
  }
}

export default App;