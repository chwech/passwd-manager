export const Increment = 'increment'
export const Decrement = 'decrement'

const ADD_TODO = 'ADD_TODO'
// 唯一改变state的办法是触发action, action是一个描述发生什么的对象

// action定义：Action 是把数据从应用传到 store 的有效载荷。它是 store 数据的唯一来源

// action创建函数：生成action的方法
export const increment = (counterCaption) => ({
  type: Increment,
  counterCaption
})
export const decrement = (counterCaption) => ({
  type: Decrement,
  counterCaption
})