function navOnClick()
{
    var element = document.getElementById("menuWrapped");
    var hamburgerButton = document.getElementById("menuHamburgerButton")
    if (element.className === "unwrappMenu") {
        element.classList.remove("unwrappMenu");
        if (hamburgerButton.classList.contains("opened"))
        {
            hamburgerButton.classList.remove("opened")
        }
    } else {
        element.classList.add("unwrappMenu");
    } 
}

let vh = window.innerHeight
document.documentElement.style.setProperty('--vh', `${vh}px`);

 window.addEventListener('resize', () => {
    let vh = window.innerHeight
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  }); 


const path = "../Images/"
console.log(path);
const picture = ["Godsofmen.jpg","serpentDove.jpg","lapassemiroir.jpg","theweekeddeep.jpeg", "HP1.jpg","lesSorcièresduClanduNord.jpg.crdownload"]
const pictures = document.querySelector(".carousel img")
let previousCarousel = document.querySelector(".leftArrow")
let nextCarousel = document.querySelector(".rightArrow")
let counter = 0;
let timer;

const autoSlide = () =>{
    if (counter === picture.length - 1) {

                counter = 0;

            } else {

                counter += 1
            }
            pictures.src = `${path}${picture[counter]}`;
}

     
    
    nextCarousel.addEventListener("click",autoSlide)


    previousCarousel.addEventListener("click",() => {
     
        if (counter === 0 ) {

           counter = picture.length -1;
           
        } else {
            
            counter -= 1;
        }
        pictures.src = `${path}${picture[counter]}`;
    });

    const stopImg =() => {
        clearInterval(timer);
    }

    const startImg =() => {
        
    timer = setInterval(autoSlide,2000);
    } 
    
    startImg();

    pictures.addEventListener("mouseover",stopImg);
    pictures.addEventListener("mouseout",startImg);

    nextCarousel.addEventListener("mouseover",stopImg);
    nextCarousel.addEventListener("mouseout",stopImg);

    previousCarousel.addEventListener("mouseover",stopImg);
    previousCarousel.addEventListener("mouseout",stopImg)