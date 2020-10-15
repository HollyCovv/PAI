import React from "react";
import "./App.css";
import TodoItem from "./components/TodoItem.js"
import Todolist from "./components/Todolist.js"
import Filter from "./components/Filter"
import todosData from "./components/todosData.js"
import Add from "./components/Add.js"

class App extends React.Component {
  constructor() {
      super()
      this.state = {
          todos: todosData,
          filter: false
      }
      this.handleChange = this.handleChange.bind(this)
      this.handleFilter = this.handleFilter.bind(this)

    }
  
  handleChange(id) {
    this.setState(prevState => {
        const updatedTodos = prevState.todos.map(todo => {
            if (todo.id === id) {
                return {
                    ...todo,
                    completed: !todo.completed
                }
            }
            return todo
        })
        console.log(prevState.todos)
        console.log(updatedTodos)
        return {
            todos: updatedTodos
        }
    })
}
handleFilter(){
  this.setState(prevState => {
    return{
      filter: !prevState.filter
    }
  })
}

Add = async (todo) =>{
  console.log(todo)
  let updatedTodos = this.state.todos
  updatedTodos.push(todo)
  this.setState({todos : updatedTodos})
}

  
  render() {
    let filtered
      if(this.state.filter){
         filtered = this.state.todos.filter(item => !item.completed).map(todo =>todo)
      }
      else{
        filtered = this.state.todos.map(todo =>todo)
      }
      const todoItems = filtered.map(item => <TodoItem key={item.id} item={item} handleChange={this.handleChange}/>)
      return (
          <div className="todo-list">
              <Filter handle = {this.handleFilter} />
              
              {todoItems.length >0 ? <Todolist todoItems={todoItems} /> : <h1>Nothing to do</h1>}
              <Add addTodoFn={this.Add} id = {this.state.todos.length +1 }></Add>
          </div>
      )    
  }
}

export default App
