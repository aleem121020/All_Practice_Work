import { useState } from "react"

function PassShowHide(){

    let [pass,setPass]=useState(false);

    return (
    <>
    <input type={pass ? 'text' : 'password'}/>
    <button onClick={()=>setPass(!pass)}>{pass ? 'Hide' : 'Show'}</button>
    <hr/>
    </>
    )
}

export {PassShowHide}