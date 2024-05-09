// navbar
const nav=document.querySelector(".nav");
const menu=document.querySelector(".menu");

menu.addEventListener("click",()=>{
    nav.classList.toggle("menubtn");
    menu.classList.toggle("menuclose");

});
nav.addEventListener("click",()=>{
    nav.classList.remove("menubtn");
    menu.classList.remove("menuclose");

    
});
//slider javascript code
// access the image
let slideImages=document.querySelectorAll('.sliderimg');
// access the next and prev buttons
let next=document.querySelector('.next');
let prev=document.querySelector('.prev');
//access the indicators
var counter=0;
//code for next button
next.addEventListener('click',slideNext);
function slideNext(){
     slideImages[counter].style.animation = "next1 0.5s ease-in forwards"
    if(counter>=slideImages.length-1){
        counter=0;
    }
    else{
        counter++;
    }
    slideImages[counter].style.animation='next2 0.5s ease-in forwards';
}
prev.addEventListener('click',slidePrev);
function slidePrev(){
    slideImages[counter].style.animation='prev1 0.5s ease-in forwards';
    if(counter>=slideImages.length-1){
        counter=slideImages.length-1;
    }
    else{
        counter++;
    }
    slideImages[counter].style.animation='prev2 0.5s ease-in forwards';
}
//autosliding
function autoSliding(){
    deleteInterval=setInterval(timer,5000);
    function timer(){
        slideNext();
    }
}
autoSliding();
//stop auto sliding when mouse is out
const container=document.querySelector(".slide-container");
container.addEventListener("mouseover",function(){
    clearInterval(deleteInterval);
})
//resume sliding when mouse is out
container.addEventListener("mouseout",autoSliding);