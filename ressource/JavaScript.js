var carousel = document.querySelector('.carousel');
var cells = carousel.querySelectorAll('.carousel__cell');
var cellCount = 3; 
var selectedIndex = 0;
var selectedRotation = 0;
var cellWidth = carousel.offsetWidth;
var cellHeight = carousel.offsetHeight;
var isHorizontal = true;
var rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
var radius, theta;

var element = document.querySelector('.description');
var tableau = element.getElementsByTagName('div');

var lien = document.getElementById('pro');

function rotateCarousel() {
  var angle = theta * selectedRotation * -1;
  carousel.style.transform = 'translateZ(' + -radius + 'px) ' + 
    rotateFn + '(' + angle + 'deg)';
    tableau[selectedIndex].classList.add('description--active');
  switch(selectedIndex){
    case 0 : lien.href = "https://github.com/Arya-Fr/Zeldo" ;break;
    case 1 : lien.href = "https://github.com/Arya-Fr/Portfolio" ;break;
    case 2 : lien.href = "" ; break;
  }
}

var prevButton = document.querySelector('.previous-button');
prevButton.addEventListener( 'click', function() {
  tableau[selectedIndex].classList.remove('description--active');
  if (selectedIndex > 0) {
    selectedIndex--;
  }else{
    selectedIndex = cellCount - 1;
  }
  selectedRotation--;
  rotateCarousel();
});

var nextButton = document.querySelector('.next-button');
nextButton.addEventListener( 'click', function() {
  tableau[selectedIndex].classList.remove('description--active');
  if (selectedIndex == cellCount - 1){
    selectedIndex = 0;
  }else{
    selectedIndex++;
  }
  selectedRotation++;
  rotateCarousel();
});



function changeCarousel() {
  theta = 360 / cellCount;
  var cellSize = isHorizontal ? cellWidth : cellHeight;
  radius = Math.round( ( cellSize / 2) / Math.tan( Math.PI / cellCount ) );
  for ( var i=0; i < cells.length; i++ ) {
    var cell = cells[i];
    if ( i < cellCount ) {
      // visible cell
      cell.style.zindex = 4;
      var cellAngle = theta * i;
      cell.style.transform = rotateFn + '(' + cellAngle + 'deg) translateZ(' + radius + 'px)';
    } else {
      // hidden cell
      cell.style.opacity = 0;
      cell.style.transform = 'none';
    }
  }

  rotateCarousel();
}
 changeCarousel();
