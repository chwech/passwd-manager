import React from 'react'

import PropTypes from 'prop-types'

const Todo = ({ onClick, completed, text }) => (
  <li
    style={{
      textDecoration: completed ? 'line-through' : 'none'
    }}
    onClick={onClick}>
    {text}
  </li>
)

Todo.PropTypes = {
  onClick: PropTypes.func.isRequired,
  completed: PropTypes.bool.isRequired,
  text: PropTypes.string.isRequired
}

export default Todo