
//Elemtent Selection
const num1= document.querySelector('#num1');
const num2 = document.querySelector('#num2');
const add=document.querySelector('#add');
const minus = document.querySelector('#minus');
const mult = document.querySelector('#mult');
const div = document.querySelector('#div');
const clear = document.querySelector('#clear');
const answers = document.querySelector('.answers');
answers.innerText='ANSWER IS...?';

//Event Listeners

add.addEventListener('click', addNumbers);
minus.addEventListener('click', minusNumbers);
mult.addEventListener('click', multiplyNumbers);
div.addEventListener('click', divideNumbers);
answers.addEventListener('click', answers);

//Functions

// 1. ADDITION

function addNumbers(e) {
    e.preventDefault();
    let par=document.createElement('p');
    par.classList.add('paragraph')
    par.innerText=eval(num1.value)+eval(num2.value);
    num1.value='';
    num2.value='';
    clear.addEventListener('click',function() {
        par.remove('p');
        
    })
    answers.appendChild(par);
       
}

// 2. SUBTRACTION

function minusNumbers(e) {
    e.preventDefault();
    let par = document.createElement('p');
    par.classList.add('paragraph')
    par.innerText = eval(num1.value) - eval(num2.value);
    num1.value = '';
    num2.value = '';
    clear.addEventListener('click', function () {
        par.remove('p');

    })
    answers.appendChild(par);
      
}

// 3. MULTIPLICATION

function multiplyNumbers(e) {
    e.preventDefault();
    let par = document.createElement('p');
    par.classList.add('paragraph')
    par.innerText = eval(num1.value) * eval(num2.value);
    num1.value = '';
    num2.value = '';
    clear.addEventListener('click', function () {
        par.remove('p');

    })
    answers.appendChild(par);
      
}

// 4. DIVISION
function divideNumbers(e) {
    e.preventDefault();
    let par = document.createElement('p');
    par.classList.add('paragraph')
    par.innerText = eval(num1.value) / eval(num2.value);
    num1.value = '';
    num2.value = '';
    clear.addEventListener('click', function () {
        par.remove('p');

    })
    answers.appendChild(par);
        
}


//***************************************************************************************** */
 
