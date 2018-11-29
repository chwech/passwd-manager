import React, {
  Component
} from 'react';
import {
  Button
} from 'antd';
import './App.css';

import AddTodo from './containers/AddTodo'
import VisibleTodoList from './containers/VisibleTodoList'
import Footer from './redux/Footer'
class App extends Component {
  handleClick () {
    console.log('click')
  }
  render() {
    return ( 
      <div className="App">
        {/* <Button type="primary" onClick={this.handleClick.bind(this)}>{'jjj'}</Button> */}
        <AddTodo />
        <VisibleTodoList />
        <Footer />
      </div>
    );
  }
}

export default App;