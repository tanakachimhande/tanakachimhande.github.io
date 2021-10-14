
//Element SELECTION

let stopWatch=document.querySelector('.stopWatch');
let start=document.querySelector('#start');
let pause = document.querySelector('#pause');
let reset = document.querySelector('#reset');
var hrs=0,mins=0,scs=0,mls=0;
var timer;

//Event Listeners
start.addEventListener('click',stopwatch);
pause.addEventListener('click', pauseStopwatch);
reset.addEventListener('click', resetStopwatch);

//Function 

function stopwatch() {
    if(!timer){
        timer = setInterval(run, 9);

    }
     
    
}
function run() {
    stopWatch.textContent=(hrs <10? "0" + hrs:hrs) + ":" +(mins <10? "0" + mins:mins )+ ":" + ( scs <10? "0" + scs:scs)+ ":" + (mls <10? "0" + mls:mls);
    mls++;
    if(mls==100){
        mls=0;
        scs++;
    }
    if(scs==60){
        scs=0;
        mins++;
    }
    if(mins==60){
        mins=0;
        hrs++;
    }
    
}
function pauseStopwatch() {
    clearInterval(timer);
    timer=false;
}
function resetStopwatch() {
     clearInterval(timer);
     timer=false;
     mls=0;
     scs=0;
     mins=0;
     hrs=0;
    stopWatch.textContent = (hrs < 10 ? "0" + hrs : hrs) + ":" + (mins < 10 ? "0" + mins : mins) + ":" + (scs < 10 ? "0" + scs : scs) + ":" + (mls < 10 ? "0" + mls : mls);

     
}


