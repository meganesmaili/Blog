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
