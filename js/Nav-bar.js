

const hamb=document.querySelector('.hamb');
const nav=document.querySelector('.navlinks');
const l1=document.querySelector('.l1');
const l2=document.querySelector('.l2');
const l3=document.querySelector('.l3');

hamb.addEventListener('click', () =>{
    
 
    nav.classList.toggle('active');
    l1.classList.toggle('le1');
    l2.classList.toggle('le2');
    l3.classList.toggle('le3');
    console.log("dkhdlk");
});

