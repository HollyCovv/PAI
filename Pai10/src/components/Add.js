import React from "react";

class Add extends React.Component{
    constructor(){
        super();
        this.state = {
            todo: ""
        }
    }
    render(){
        return(
            <div className = "AddContainer">
                <form onSubmit ={(e) => this.submitTodo(e)}>
                    <input onChange = {(e) => this.updateInput(e)} type="text"></input>
                    <button  type ="submit">Add</button>
                </form>
            </div>
        )
    }
    updateInput =(e) =>{
        this.setState({ todo : e.target.value})

    }
    submitTodo = (e) =>{
        e.preventDefault()
        if(this.state.todo.trim() == "")
        {
            console.log("pusto")
            
        }
        else{
            console.log(this.state.todo)
            const todos = {"id": this.props.id, "text": this.state.todo, "done": false}
            this.props.addTodoFn(todos)
            this.setState({ todo: "" })
            e.target.reset();
            console.log("jestem tu")
        }
        
    }
}
export default Add;