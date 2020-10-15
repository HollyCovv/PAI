import React from "react"


class Todolist extends React.Component {

    render() {
        return (
            <div className="todolist" >
                {this.props.todoItems}
            </div>
        )
    }
}

export default Todolist