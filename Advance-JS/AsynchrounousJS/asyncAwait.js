
// async function hello(){
//     console.log("hello ASYNC ");
// }


function API(){
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
        console.log("Weather Data ");
        resolve();
        },3000)
    });
}

async function allData(){
    await API();
    await API();
    await API();
}


