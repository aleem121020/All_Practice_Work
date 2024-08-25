


function getData1(mail){
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            console.log(mail);
            reject();
        },3000);
    });
} 



function getData2(password){
    return new Promise((resolve,reject)=>{
        setTimeout(() => {
            console.log(password);
        }, 3000);
    });
}


getData1("aleem121020@gmail.com").then((err)=>{
    getData2("12345679").catch((err)=>{
        console.log("error",err );
    });
})