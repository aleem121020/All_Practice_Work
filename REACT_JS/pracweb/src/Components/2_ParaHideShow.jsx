import { useState } from "react";

function ParaHideShow(){
	let [para,setPara]=useState(false);
	let template="";

	if(para){
		template=<>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quasi error libero fugit hic saepe fugiat ullam rem ratione culpa ea doloremque, commodi quam modi? Quia architecto esse temporibus at!
			</p>
			<button onClick={()=>setPara(!para)}>{para ? 'Hide' : 'Show'}</button>
		</>
	}
	else{
		template=<>
			<button onClick={()=>setPara(!para)}>{para ? 'Hide' : 'Show'}</button>
		</>
	}
	

	return (
		<>
		{template}
		</>
		)
}

export {ParaHideShow}