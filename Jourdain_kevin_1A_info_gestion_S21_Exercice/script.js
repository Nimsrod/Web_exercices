//console.log("Hello world");
const ul = document.querySelector('ul');
const add =  document.querySelector('#addBonjour');
const li =  document.querySelector('li');

add.addEventListener('click', () =>{
    const li = document.createElement('li');
    li.textContent = 'Bonjour';
    ul.appendChild(li);
    ul.style.display='block';
})

const red = document.querySelector('#red');
red.addEventListener('click', e =>{
    if(e.target.tagName = 'BUTTON') {
        ul.style.color = 'red';
    }
})

const green = document.querySelector('#green');
green.addEventListener('mousemove', e =>{
    ul.style.color = 'darkgreen';
})

const black = document.querySelector('#black');
black.addEventListener('click',  f=>{
    ul.style.color = 'black';
})

const effacer = document.querySelector('#erase');
effacer.addEventListener('click', ()=>{
    ul.style.display = 'none';
})
