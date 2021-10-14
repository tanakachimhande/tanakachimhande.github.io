 

//Element selection

const user = document.querySelector('#user');
const profile = document.querySelector('.contact-sidebar');
 

//Eventlisteners

user.addEventListener('mouseleave',function(){
    alert('Toggle to view my profile!!');
})
user.addEventListener('click', function(){
     profile.classList.toggle('show-sidebar');
          
});


//Displaying content

const html = document.querySelector('#html');
const css = document.querySelector('#css');
const js = document.querySelector('#js');
const boot = document.querySelector('#boot');
const jq = document.querySelector('#jq');
const php = document.querySelector('#php');
const sql = document.querySelector('#sql');
const content = document.querySelector('.content');
const defaultText = document.querySelector('defaultText'); 

//Hyper Text Markup Language section.

html.addEventListener('click',function(){
    content.classList.add('hidedtext');
    content.classList.add('show-text1');
    content.classList.remove('show-text2');
    content.classList.remove('show-text3');
    content.classList.remove('show-text4');
    content.classList.remove('show-text5');
    content.classList.remove('show-text6');
    content.classList.remove('show-text7');
})

//Cascading style sheet section.

css.addEventListener('click',function(){
    content.classList.add('hidedtext');
    content.classList.add('show-text2');
    content.classList.remove('show-text1');
    content.classList.remove('show-text3');
    content.classList.remove('show-text4');
    content.classList.remove('show-text5');
    content.classList.remove('show-text6');
    content.classList.remove('show-text7');
})

//Javascript section.

js.addEventListener('click',function(){
    content.classList.add('hidedtext');
    content.classList.add('show-text3');
    content.classList.remove('show-text1');
    content.classList.remove('show-text2');
    content.classList.remove('show-text4');
    content.classList.remove('show-text5');
    content.classList.remove('show-text6');
    content.classList.remove('show-text7');
})

//Bootstrap section.

boot.addEventListener('click',function(){
    content.classList.add('hidedtext');
    content.classList.add('show-text4');
    content.classList.remove('show-text1');
    content.classList.remove('show-text2');
    content.classList.remove('show-text3');
    content.classList.remove('show-text5');
    content.classList.remove('show-text6');
    content.classList.remove('show-text7');
})

//Jquery section.

jq.addEventListener('click',function(){
    content.classList.add('hidedtext');
    content.classList.add('show-text5');
    content.classList.remove('show-text1');
    content.classList.remove('show-text2');
    content.classList.remove('show-text3');
    content.classList.remove('show-text4');
    content.classList.remove('show-text6');
    content.classList.remove('show-text7');
})

//Processor Hypertext section

php.addEventListener('click',function(){
    content.classList.add('hidedtext');
    content.classList.add('show-text6');
    content.classList.remove('show-text1');
    content.classList.remove('show-text2');
    content.classList.remove('show-text3');
    content.classList.remove('show-text4');
    content.classList.remove('show-text5');
    content.classList.remove('show-text7');
})

//Mysql section.

sql.addEventListener('click',function(){
    content.classList.add('hidedtext');
    content.classList.add('show-text7');
    content.classList.remove('show-text1');
    content.classList.remove('show-text2');
    content.classList.remove('show-text3');
    content.classList.remove('show-text4');
    content.classList.remove('show-text5');
    content.classList.remove('show-text6');
})


//SETTINGS

const textColor = document.querySelector('.text-color');
const textBg = document.querySelector('.text-bg');
const textDc = document.querySelector('.text-dc');
const texts = document.querySelector('#change');
const sett = document.querySelector('#sett')
const divs = document.querySelector('.setngs');

console.log(textColor);

//Showing settings options

sett.addEventListener('mouseleave',function(){
    alert('You can customize themes here!!');
})

sett.addEventListener('click',function(){
    divs.classList.toggle('show-set1');
    
})
sett.addEventListener('click',function(){
    divs.classList.toggle('show-set2');
    
})
sett.addEventListener('click',function(){
    divs.classList.toggle('show-set3');
    
})

//customization

textColor.addEventListener('click',function(){
    texts.style.color='green';
     
})
textColor.addEventListener('dblclick',function(){
    texts.style.color='black';
})
textBg.addEventListener('click',function(){
    texts.style.backgroundColor='azure';
})
textBg.addEventListener('dblclick',function(){
    texts.style.backgroundColor='white';
})
textDc.addEventListener('click',function(){
    texts.style.textDecoration='underline';
})
textDc.addEventListener('dblclick',function(){
    texts.style.textDecoration='none';
})


//********************************************************************************************* 

 



 