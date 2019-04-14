import { combineReducers } from 'redux'
const todos = (state = [], action) => {
  switch (action.type) {
    case 'ADD_TODO':
      return [
        ...state,
        {
          id: action.id,
          text: action.text,
          completed: false
        }
      ]
    case 'TOGGLE_TODO':
      return state.map(todo =>
        (todo.id === action.id) 
          ? {...todo, completed: !todo.completed}
          : todo
      )
    default:
      return state
  }
}
const visibilityFilter = (state = 'SHOW_ALL', action) => {
  switch (action.type) {
    case 'SET_VISIBILITY_FILTER':
      return action.filter
    default:
      return state
  }
}
const todoApp = combineReducers({
  todos,
  visibilityFilter
})
export default todoApp
// reducer是形如(state, action) => state的纯函数，reducer决定每个action如何改变state
// export default (state, action) => {
//   // 不要在reducer里面做以下操作
//   // 1. 修改传入的参数
//   // 2. 执行请求和路由跳转
//   // 3. 调用非纯函数，如Date.now()和Math.random()
//   const {
//     counterCaption
//   } = action
//   switch (action.type) {
//     case Increment:
//       return { ...state,
//         [counterCaption]: state[counterCaption] + 1
//       }
//     case Decrement:
//       return { ...state,
//         [counterCaption]: state[counterCaption] - 1
//       }
//     default:
//       return state
//   }
// }