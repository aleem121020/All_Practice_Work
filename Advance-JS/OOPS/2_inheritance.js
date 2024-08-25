
class Person{

    constructor(){
        this.species="homo sapiens";
    }

    eat(){
        console.log("eat");
    }

    sleep(){
        console.log("Sleep");
    }

    work(){
        console.log("Do nothig !!");
    }
}

class Enigneer extends Person{
    work(){
    console.log("solve problems, build something");
    }
}

class Doctor extends Person{
    work(){
        console.log("Treat Patients");
    }
}


let perObj=new Person;

let eniObj=new Enigneers;

let docObj=new Doctor;



