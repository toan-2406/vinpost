// back tot top
//Get the button
var mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
// top nav menu

let menuItems = document.getElementsByClassName('nav-link');

Array.from(menuItems).forEach((item, index) => {
    item.onclick = (e) => {
        let currMenu = document.querySelector('.nav-link.active1');
        currMenu.classList.remove('active1')
        item.classList.add('active1')
    }
})

//Address info
let addressItems = document.getElementsByClassName('btn-address');

Array.from(addressItems).forEach((item, index) => {
    item.onclick = (e) => {
        let addressText= document.querySelector('.shipping-text');
        let addressText1= document.querySelector('.shipping-text1');
        let currAddress = document.querySelector('.btn-address.active2');
        currAddress.classList.remove('active2')
        item.classList.add('active2')
        if(currAddress){
          
          addressText.style.display='block';
          addressText1.style.display='block';
        }
        else{
        
          addressText1.style.display='none';
        }
        
       
    }
})
//nav-menu
const menuBtn = document.querySelector(".menu-icon i");
const logoshow = document.querySelector(".logo img");
         const items = document.querySelector(".nav-items");
         menuBtn.addEventListener('click',function(){
            items.classList.toggle("active");
            logoshow.classList.add("show");
        });