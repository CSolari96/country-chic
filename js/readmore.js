//READ MORE BUTTON ON ABOUT PAGE

//VARIABLES

var readButton = document.getElementById("buttonshow");
var showLess = document.getElementById("buttonhide");
var moreInfo = document.getElementById("moreinfoabout");

//FUNCTION

function revealMore () {
    moreInfo.classList.remove('hide');
    showLess.classList.remove('hide');
    readButton.classList.add('hide');
};

function hideMore () {
  moreInfo.classList.add('hide');
  showLess.classList.add('hide');
  readButton.classList.remove('hide');
};

//EVENT LISTENERS


readButton.addEventListener("click", revealMore);
showLess.addEventListener("click", hideMore);
