
class Person{

    constructor(species){
        this.species=species;
    }

    eat(){
        console.log("Eat");
    }
    sleep(){
        console.log("Sleep");
    }
    work(){
        console.log("do nothing");
    }
}



class Student extends Person{
    
    constructor(StuId,species){
        super(species);        
        this.StuId=StuId;
    }

    work(){
        super.eat();
        console.log("Study.....")
    }
    
}


const person1  = new Person("Homo sapiens");

const Student1 = new Student(101,"Homo Sapeins");



// ERROR HANDLING  (try-catch);

try{

}catch(err){

}
