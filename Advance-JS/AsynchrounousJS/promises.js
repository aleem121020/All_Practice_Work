

// *********************************SYNTAX***********************************


// let promise = new Promise((resolve,reject)=>{
//     console.log("I'm promise !!");
// });



// *********************************resolve/reject***********************************



// let promise = new Promise((resolve,reject)=>{
//     console.log("I'm promise !!");
//     resolve("Success !");
//     reject("ERROR !!");
// });



// *********************************getData Example***********************************


// function getData(dataId,nextData){
//     return new Promise((resolve,reject) => {
//             setTimeout(()=>{
//                 console.log("Data ", dataId);
//                 resolve("Success !!");

//                 if(nextData){
//                     nextData();
//                 }
//             },10000);
//     });
// }


// *****************************.then & .catch***********************************


// const getPromise = () => {
//     return new Promise((resolve,reject)=>{
//         console.log("I am a Promise");
//         resolve("Success");
//     });
// }


// let promise = getPromise();

// promise.then((res)=>{
// console.log("promise fullfilled", res);
// });

// promise.catch((err)=>{
//     console.log("Rejected !!", err);
// });




// *****************************PROMISE CHAINING***********************************


function asyncFun() {
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            console.log("data 1");
            resolve("Success");
        },3000);
    });
}

function asyncFun2() {
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            console.log("data 2");
            resolve("Success");
        },3000);
    });
}




// short code

// asyncFun().then((res)=>{
//     asyncFun2().then((res)=>{
//     });
// }).catch((err)=>{
//     console.log(err);
// })



// long code

console.log("Fetching data 1.......")
let P1=asyncFun();

P1.then((res)=>{
    console.log("Fetching data 2.......")
    let P2=asyncFun2();
    P2.then((res)=>{
    });
}).catch((err)=>{
    console.log(err);
});





