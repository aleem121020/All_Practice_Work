

const URL="https://cat-fact.herokuapp.com/facts";


let fact = document.querySelector("#factPara");
let btn = document.querySelector("#btn");

let getFacts = async ()=>{
    console.log("Getting Data ........");
    let response = await fetch(URL);
    console.log(response);
    let data = await response.json();

    fact.innerHTML = data[5].text;
}

btn.addEventListener("click",getFacts);


