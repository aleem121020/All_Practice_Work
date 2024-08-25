
// // Callback example

// function sum(a,b){
//     console.log(a+b);
// }

// function calculate(a,b,sumcallback){
//     sumcallback(a,b);
// }

// // calculate(10,20,sum);

// calculate(20,45,(a,b) => {
//     console.log(a+b);
// })


// // Callback another example

// let hello = () =>{
//     console.log("Hello world");
// }

// setTimeout(hello,4000);





// ********************************CALLBACK HELL****************************


function  getData(dataId,nextData){
    setTimeout(()=>{
        console.log("Data ",dataId);
        if(nextData){
        nextData();
        }
    },2000)
}



getData(101,() => {
    console.log("Gettting data2......");
    getData(102,()=>{
        console.log("Gettting data3......");
        getData(103,()=>{
            console.log("Gettting data4......");
            getData(104);
        });
    });
});








