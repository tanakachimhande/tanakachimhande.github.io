

//Element Selection

//QUESTION SELECTION.

const qstn1=document.querySelector("#qstn1");
const qstn2 = document.querySelector("#qstn2");
const qstn3 = document.querySelector("#qstn3");
const qstn4 = document.querySelector("#qstn4");
const qstn5 = document.querySelector("#qstn5");

//ALERT MESSAGES

//SECTIONT A.

const notify1 = document.querySelector(".alert1");
const notify2 = document.querySelector(".alert2");
const notify3 = document.querySelector(".alert3");
const notify4 = document.querySelector(".alert4");
const notify5 = document.querySelector(".alert5");

 
//SECTION CONTAINER SELECTION.

 
const appContainer = document.querySelector(".appContainer");

 
//Event Listerning

btn1.addEventListener("click",  sectionA);

 

//Functions


//Handiling the quize answers evaluation

//SECTION A

function  sectionA(e) {
    e.preventDefault();
    if (qstn1.value.trim() == ""){

         let timer=setInterval(() => {
             notify1.classList.add('show1')
             notify1.classList.remove('show2')
             notify1.classList.remove('show3')
             clearInterval(timer)
         }, 2000) 
        
     }
     else if (qstn1.value == 20){

        notify1.classList.add('show2')
        notify1.classList.remove('show1')
        notify1.classList.remove('show3')        
     }
     else{
        notify1.classList.add('show3')
        notify1.classList.remove('show1')
        notify1.classList.remove('show2')
     }
    if (qstn2.value.trim() == "") {

        let time = setInterval(() => {
            notify2.classList.add('show1')
            notify2.classList.remove('show2')
            notify2.classList.remove('show3')
            clearInterval(time)

        }, 2000);
         
    }
    else if (qstn2.value == 100) {
        notify2.classList.add('show2')
        notify2.classList.remove('show1')
        notify2.classList.remove('show3')
      
    }
    else {
        notify2.classList.add('show3')
        notify2.classList.remove('show1')
        notify2.classList.remove('show2')
         
    }
    if (qstn3.value.trim() == "") {

        let tim = setInterval(() => {
            notify3.classList.add('show1')
            notify3.classList.remove('show2')
            notify3.classList.remove('show3')
            clearInterval(tim)

        }, 2000);
         
    }
    else if (qstn3.value == 48) {

        notify3.classList.add('show2')
        notify3.classList.remove('show1')
        notify3.classList.remove('show3')
         
    }
    else {

        notify3.classList.add('show3')
        notify3.classList.remove('show1')
        notify3.classList.remove('show2')
    }
    if (qstn4.value.trim() == "") {

        let ti = setInterval(() => {
            notify4.classList.add('show1')
            notify4.classList.remove('show2')
            notify4.classList.remove('show3')
            clearInterval(ti)

        }, 2000);
       
    }
    else if (qstn4.value == 36) {

        notify4.classList.add('show2')
        notify4.classList.remove('show1')
        notify4.classList.remove('show3')
         
    }
    else {

        notify4.classList.add('show3')
        notify4.classList.remove('show1')
        notify4.classList.remove('show2')
    }
    if (qstn5.value.trim() == "") {

        let t = setInterval(() => {
            notify5.classList.add('show1')
            notify5.classList.remove('show2')
            notify5.classList.remove('show3')
            clearInterval(t)

        }, 2000);
        
    }
    else if (qstn5.value == 60) {

        notify5.classList.add('show2')
        notify5.classList.remove('show1')
        notify5.classList.remove('show3')
     
    }
    else {

        notify5.classList.add('show3')
        notify5.classList.remove('show1')
        notify5.classList.remove('show2')
    }
     
    
      
}

 
 

 


 
 

 