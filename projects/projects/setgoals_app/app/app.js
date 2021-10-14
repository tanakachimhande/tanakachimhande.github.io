 
//Elements selection

const checkbox = document.querySelector('#checkbox');
const check = document.querySelector('#check');
const dateAndTime = document.querySelector('.time');

//Displaying current dateAndTime

let months = ['Jan','Feb','Mac','Apr','May','June','July','Aug','Sept','Octb','Nov','Dec'];

let days = ['Mon','Tues','Wedn','Thurs','Fri','Sat','Sun'];

let time = new Date();
let month = time.getMonth() ;
month = months[month];
let weekday = days[time.getDay()];
 

let date = time.getDate();
let year = time.getFullYear();
let hrs = time.getHours();
let mins = time.getMinutes();

const displayTime = `${weekday} | ${month} | ${date} | ${year} | ${hrs}:${mins}`;
dateAndTime.textContent=displayTime;
  

//************************************************************************************************

 
 


 
 


 

 

