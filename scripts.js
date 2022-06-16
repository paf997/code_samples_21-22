/*$(document).ready(function(){
    alert('testing!')
    console.log("Hello");

})*/

function reveal(){
    document.getElementById('navigation_bar_links').classList.toggle('active');
}

function reveal_quick_links(){
    document.getElementById('quick_links').classList.toggle('active');
}

var current_overlay;
var is_overlay_showing = false;
function show_overlay(element){
    if(is_overlay_showing === true){
        console.log("hiding overlay" + current_overlay);
        document.getElementById(current_overlay).classList.toggle('active');
        document.getElementById('overlay_background').classList.toggle('active');
        current_overlay = null;
        is_overlay_showing = false;
        
    }else{
        console.log(element.className+'_overlay_background');
        document.getElementById(element.className+'_overlay').classList.toggle('active');
        document.getElementById('overlay_background').classList.toggle('active');
        current_overlay = element.className+'_overlay';
        is_overlay_showing = true;
    }
}


const menuBtn = document.querySelector('.menu_btn');
let menuOpen = false;
menuBtn.addEventListener('click',()=>{
    if(!menuOpen){
        menuBtn.classList.add('open');
        menuOpen=true;
    }else{
        menuBtn.classList.remove('open');
        menuOpen=false;
    }
});

