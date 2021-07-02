class Slighter {
    constructor(sliderContainer, interval) {
        this.sliderContainer = sliderContainer;
        this.currentSlide = 0;
        this.sliderContainer.children[this.currentSlide].classList.add("current");
        if (this.sliderContainer.children.length > 1)
            setInterval(() => this.changeSlide(), interval);
    }
    changeSlide() {
        this.sliderContainer.children[this.previousSlide].classList.remove("previous");
        this.sliderContainer.children[this.currentSlide].classList.replace("current", "previous");
        this.sliderContainer.children[this.nextSlide].classList.add("current");
        this.currentSlide = this.nextSlide;
    }
    get previousSlide() {
        if (this.currentSlide === 0) {
            return this.sliderContainer.children.length - 1;
        }
        return this.currentSlide - 1;
    }
    get nextSlide() {
        if (this.currentSlide < this.sliderContainer.children.length - 1) {
            return this.currentSlide + 1;
        }
        return 0;
    }
}
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
//Sevices active
let seviceItems =document.getElementsByClassName('sevices-content__link');
Array.from(seviceItems).forEach((item,index) => {
  item.onclick =(e)=>{
    let currSevices = document.querySelector('.sevices-content__link.active-type-sevice');
    currSevices.classList.remove('active-type-sevice');
    item.classList.add('active-type-sevice');
    let table1 = document.getElementById('fxg-table-wrapper1');
    let table2 =document.getElementById('fxg-table-wrapper2');
    if(currSevices == table1){
      table1.style.display="block";
      table2.style.display="none";
    }
    if(currSevices == table2){
      table2.style.display="block";
      table1.style.display="none";
    }
    
  }
})