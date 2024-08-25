
class ToyotaCar{

    constructor(id,ownerName){
        this.id=id;
        this.ownerName=ownerName;

        console.log("New object created !!");
    }

    start(){
        console.log("Start");
    }
    stop(){
        console.log("stop");
    }

    setBrand(brand){
        this.brand=brand;
    }

}

let Fortuner = new ToyotaCar();
let lexus = new ToyotaCar();
lexus.setBrand("Lexus");

let Fortuner2= new ToyotaCar(101,"Abdul Aleem");

console.log(Fortuner2.id+ " and " + Fortuner2.ownerName);
