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
        let currMenu = document.querySelector('.nav-link.active2');
        currMenu.classList.remove('active2')
        item.classList.add('active2')
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