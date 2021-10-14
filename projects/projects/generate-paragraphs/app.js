

//Content array

let paragraphs=[
    { par1:'This is the first paragraph, dolor sit amet consectetur adipisicing elit. Modi consequuntur magnam enim rem velit nisi dicta, unde, itaque facere provident ex labore nam, eius reiciendis ullam architecto mollitia repellendus magni quaerat dolorem eveniet? Nisi reprehenderit tempore, aperiam, sequi voluptatem iste labore hic deleniti repudiandae quis, non provident animi error! Aliquid id sint cum, ipsa culpa ipsam minima, itaque voluptatem hic quibusdam error dicta deserunt corporis eius alias ipsum ratione saepe aperiam eligendi magni ad vel suscipit enim! Expedita ut nobis dolorem quam veniam accusamus vitae. Ullam minus iure dignissimos corrupti temporibus eaque magnam repudiandae, quibusdam reprehenderit laborum similique fugiat facilis.'},
    { par1: 'This is the second paragraph, dolor sit amet consectetur adipisicing elit. Modi consequuntur magnam enim rem velit nisi dicta, unde, itaque facere provident ex labore nam, eius reiciendis ullam architecto mollitia repellendus magni quaerat dolorem eveniet? Nisi reprehenderit tempore, aperiam, sequi voluptatem iste labore hic deleniti repudiandae quis, non provident animi error! Aliquid id sint cum, ipsa culpa ipsam minima, itaque voluptatem hic quibusdam error dicta deserunt corporis eius alias ipsum ratione saepe aperiam eligendi magni ad vel suscipit enim! Expedita ut nobis dolorem quam veniam accusamus vitae. Ullam minus iure dignissimos corrupti temporibus eaque magnam repudiandae, quibusdam reprehenderit laborum similique fugiat facilis.' },
    { par1: 'This is the third paragraph, dolor sit amet consectetur adipisicing elit. Modi consequuntur magnam enim rem velit nisi dicta, unde, itaque facere provident ex labore nam, eius reiciendis ullam architecto mollitia repellendus magni quaerat dolorem eveniet? Nisi reprehenderit tempore, aperiam, sequi voluptatem iste labore hic deleniti repudiandae quis, non provident animi error! Aliquid id sint cum, ipsa culpa ipsam minima, itaque voluptatem hic quibusdam error dicta deserunt corporis eius alias ipsum ratione saepe aperiam eligendi magni ad vel suscipit enim! Expedita ut nobis dolorem quam veniam accusamus vitae. Ullam minus iure dignissimos corrupti temporibus eaque magnam repudiandae, quibusdam reprehenderit laborum similique fugiat facilis.' },
    { par1: 'This is the default paragraph, dolor sit amet consectetur adipisicing elit. Modi consequuntur magnam enim rem velit nisi dicta, unde, itaque facere provident ex labore nam, eius reiciendis ullam architecto mollitia repellendus magni quaerat dolorem eveniet? Nisi reprehenderit tempore, aperiam, sequi voluptatem iste labore hic deleniti repudiandae quis, non provident animi error! Aliquid id sint cum, ipsa culpa ipsam minima, itaque voluptatem hic quibusdam error dicta deserunt corporis eius alias ipsum ratione saepe aperiam eligendi magni ad vel suscipit enim! Expedita ut nobis dolorem quam veniam accusamus vitae. Ullam minus iure dignissimos corrupti temporibus eaque magnam repudiandae, quibusdam reprehenderit laborum similique fugiat facilis.' },
];
//console.log(paragraphs[0].par1);

//Element selection
const display=document.querySelector('.par-container')
const key=document.querySelector('#key');
const btn = document.querySelector('#btn');
const par1 = document.querySelector('.par1');
const par2 = document.querySelector('.par2');
const par3 = document.querySelector('.par3');
const par4 = document.querySelector('.par4');

console.log(key);

//Event lesteners

btn.addEventListener('click',function(e){

    e.preventDefault();
    if(key.value=='persistance'){
        display.classList.add('show-par1');
        display.classList.remove('show-par2');
        display.classList.remove('show-par3');
        display.classList.remove('show-par4');
        display.classList.remove('show-par5');
    }
    else if(key.value == 'planning'){
        display.classList.add('show-par2');
        display.classList.remove('show-par1');
        display.classList.remove('show-par3');
        display.classList.remove('show-par4');
        display.classList.remove('show-par5');
    }
    else if (key.value =='pride') {
        display.classList.add('show-par3');
        display.classList.remove('show-par1');
        display.classList.remove('show-par2');
        display.classList.remove('show-par4');
        display.classList.remove('show-par5');
    }
    else if (key.value =='peer-pressure') {
        display.classList.add('show-par4');
        display.classList.remove('show-par1');
        display.classList.remove('show-par2');
        display.classList.remove('show-par3');
        display.classList.remove('show-par5');
    }
    else if(key.value <= 0){
        alert('Invalid Key or Empty input');
        display.classList.add('show-par5');
        display.classList.remove('show-par2');
        display.classList.remove('show-par3');
        display.classList.remove('show-par1');
        display.classList.remove('show-par4');
         
    }
    else if (key.value >= 5){
        alert('Invalid Key or Empty input');
        display.classList.add('show-par5');
        display.classList.remove('show-par2');
        display.classList.remove('show-par3');
        display.classList.remove('show-par1');
        display.classList.remove('show-par4');
    }
    else{
        alert('Wrong command. Please do try again !!')
    }



})
 


//Functions

 

