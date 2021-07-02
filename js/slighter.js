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

