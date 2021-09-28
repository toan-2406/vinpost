// back tot top
//Get the button
const mybutton = document.getElementById("back-to-top");
const navbar_menu = document.querySelector('.navbar-menu')
console.log(navbar_menu)
const sticky = navbar_menu.offsetTop;
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
  if (window.pageYOffset >= sticky){
     navbar_menu.classList.add("sticky")
  }else{
    navbar_menu.classList.remove("sticky")
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

//Address info/Sevice
const addressItems = document.querySelectorAll('.btn-address');
const addressContents = document.querySelectorAll('.shipping-tab');
 addressItems.forEach((item, index) => {

  const addressContent = addressContents[index];
 

   item.onclick = function() {

     document.querySelector('.btn-address.active').classList.remove('active');
     document.querySelector('.shipping-tab.active').classList.remove('active');
     
     
     this.classList.add('active');
     addressContent.classList.add('active');
     
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