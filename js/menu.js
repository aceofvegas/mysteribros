var menu = { 
     // name 
     l1 : "Home", 
     l2 : "About", 
     l3 : "Games", 
     l4 : "NFTs", 
     l5 : "More",
     l6 : "Testing1", // for the more menu
     l7 : "Testing2", // for the more menu
     l8 : "Testing3", // for the more menu

     // links 
     link1 : 'index.html',  // simply change these to change menu for whole site 
     link2 : "about.html", 
     link3 : "game.html", 
     link4 : "nft.html", 
     link5 : "more.html", 
     
     link6 : "more.html", 
     link7 : "more.html", 
     link8 : "more.html", 
    
     // (B) INITIALIZE GAME 
     init : () => { 
         // (B1) GET HTML ELEMENTS 
         menu.one = document.getElementById("menu1"); 
         menu.two = document.getElementById("menu2"); 
         menu.three = document.getElementById("menu3"); 
         menu.four = document.getElementById("menu4"); 
         menu.five = document.getElementById("menu5"); 

         menu.six = document.getElementById("more1"); 
         menu.seven = document.getElementById("more2"); 
         menu.eight = document.getElementById("more3"); 
  
         menu.start() 
     },   
  
     start : () => { 
         // place bet when round starts  
         menu.one.innerHTML = menu.l1; 
         menu.two.innerHTML = menu.l2; 
         menu.three.innerHTML = menu.l3; 
         menu.four.innerHTML = menu.l4; 
         menu.five.innerHTML = menu.l5;
         
         menu.six.innerHTML = menu.l6;
         menu.seven.innerHTML = menu.l7;
         menu.eight.innerHTML = menu.l8;
         menu.one = document.getElementById("menu1").href = menu.link1; 
         menu.two = document.getElementById("menu2").href = menu.link2; 
         menu.three = document.getElementById("menu3").href = menu.link3; 
         menu.four = document.getElementById("menu4").href = menu.link4; 
         //menu.five = document.getElementById("menu5").href = menu.link5;
         
         menu.six = document.getElementById("more1").href = menu.link6; 
         menu.seven = document.getElementById("more2").href = menu.link7; 
         menu.eight = document.getElementById("more3").href = menu.link8; 
  
     }, 
  
 }; 
     window.addEventListener("DOMContentLoaded", menu.init);