const userlogin={
    islogin(){
        console.log("You are logged In");
    }
}


let followCount=15;
let postCount=55;

const userProfile={
    name:"Abdul Aleem",
    platform:"intsgram",
    follower:`${followCount}K`,
    post:postCount,

    showProfile:function(){
console.log(`Name : ${this.name}
Platform : ${this.platform}
Follow : ${this.follower}
post: ${this.post}`);
    }
}


const userProfile2={
    islogin(){
        console.log("User is not loggin");
    }
};
const userProfile3={};
const userProfile4={};


userProfile.__proto__=userlogin;
userProfile2.__proto__=userlogin;
userProfile3.__proto__=userlogin;
userProfile4.__proto__=userlogin;


