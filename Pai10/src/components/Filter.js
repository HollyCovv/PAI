import React from "react"


function Filter(props){
        return (
            <div className="check" >
               <input 
                type="checkbox" 
                onChange={() => props.handle()}
                />
                <p1>hide completed</p1>
            </div>
        )
}


export default Filter