import { useState } from "react";

function Counter(){
    let [count,setCount]=useState(0);

    let incData = () => {
        if(count<20){
        setCount(count+1)
        }
    };

    let decData = () => {
        if(count>0){
        setCount(count-1);
        }
    };

    let resetData = () => setCount(count*0);

    
    return (
        <div>
        <h1>COUNTER</h1>
        <h1>{count}</h1>
        <button onClick={incData}>Increment Counter</button>
        <br/>
        <button onClick={decData}>decrement Counter</button>
        <br/>
        <button onClick={resetData}>Reset Counter</button>
        <hr/>
        </div>
    )
}

export {Counter}  