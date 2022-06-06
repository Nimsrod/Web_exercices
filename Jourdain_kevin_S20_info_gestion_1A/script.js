const button = document.querySelector('button');
const pop = document.querySelector('.pop');
const windz = document.querySelector('body');
const clos = document.querySelector('#right');
button.addEventListener('click', e =>{
    if(e.target.tagName = 'BUTTON' ) {
          //window.open("popup.html","Buy ninja clothes","width=300,height=500,toolbar=no");
          pop.style.display = "block";
          pop.style.backgroundColor= 'white';
          windz.style.backgroundColor = 'lightgrey';
    }
})

clos.addEventListener('click', f =>{
    if(f.target.getElementByID = '#right') {
        pop.style.display = "none";
        windz.style.backgroundColor = 'white';
    }
})
 