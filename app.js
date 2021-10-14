
const show=document.querySelector("#show");
const navlist= document.querySelector(".navlist");
const clock= document.querySelector(".clock");
const intro= document.querySelector(".text");
const preloader= document.querySelector(".preloader");

 
show.addEventListener("click", togglers);
window.addEventListener('load', vanish);

function vanish(){
    preloader.classList.add("disappear");
}

function togglers(){

navlist.classList.toggle("active");

}

 

function digitalTime(){

    let time= new Date();

    let h=time.getHours();
    let m=time.getMinutes();
    let s = time.getSeconds();
    let session="pm"

    if(h == 0){
        
        session="am";
    }
    
    h=(h < 10) ? "0" + h : h;
    m=(m < 10) ? "0" + m : m;
    s=(s < 10) ? "0" + s : s;

       clock.innerText= h + ":" + m + ":" + s + session;

    setTimeout(digitalTime,1000)
  

}

digitalTime();

let text = "Welocome to chimhztechy...";
let index = 0;

function autoText(){
      
      intro.innerText=text.slice(0,index);
      index++;
      if(index >text.length){
          index=0;
      }


}
setInterval(autoText,300)
 



