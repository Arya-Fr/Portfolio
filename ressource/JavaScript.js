var carousel = document.querySelector('.carousel');
var cells = carousel.querySelectorAll('.carousel__cell');
var cellCount = 4;
var selectedIndex = 0;
var selectedRotation = 0;
var compteur = document.getElementById("numcarous");
var cellWidth = carousel.offsetWidth;
var cellHeight = carousel.offsetHeight;
var isHorizontal = true;
var rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
var radius, theta;

var element = document.querySelector('.description');
var tableau = element.getElementsByTagName('div');

var git = document.getElementById('pro');
var test = document.getElementById('pla');

function retourNormal(){
  element.style.transform = 'translateX(0px)';
  rotateCarousel();
}

function rotateCarousel() {
  var angle = theta * selectedRotation * -1;
  carousel.style.transform = 'translateZ(' + -radius + 'px) ' +
    rotateFn + '(' + angle + 'deg)';
  tableau[selectedIndex].classList.add('description--active');
  compteur.innerHTML = selectedIndex + 1 + "/" + cellCount;
  switch (selectedIndex) {
    case 0: git.href = "https://github.com/Arya-Fr/Zeldo"; break;
    case 1: git.href = "https://github.com/Arya-Fr/Portfolio"; break;
    case 2: git.href = "https://github.com/Arya-Fr/YcoinV1"; break;
    case 3: git.href = "https://github.com/Arya-Fr/Urban-Marginal"; break;
  }
}

var prevButton = document.querySelector('.previous-button');
prevButton.addEventListener('click', function () {
  if (window.innerWidth >= 900){
    element.style.transform = 'translateX(250px)';
  }
  tableau[selectedIndex].classList.remove('description--active');
  if (window.innerWidth >= 900){
    setTimeout(retourNormal,200);
  }else{
    setTimeout(retourNormal,10);
  }
  if (selectedIndex > 0) {
    selectedIndex--;
  } else {
    selectedIndex = cellCount - 1;
  }
  selectedRotation--;
});

var nextButton = document.querySelector('.next-button');
nextButton.addEventListener('click', function () {
  if (window.innerWidth >= 900){
    element.style.transform = 'translateX(250px)';
  }
  tableau[selectedIndex].classList.remove('description--active');
  if (window.innerWidth >= 900){
    setTimeout(retourNormal,200);
  }else{
    setTimeout(retourNormal,10);
  }
  if (selectedIndex == cellCount - 1) {
    selectedIndex = 0;
  } else {
    selectedIndex++;
  }
  selectedRotation++;
});

function changeCarousel() {
  theta = 360 / cellCount;
  var cellSize = isHorizontal ? cellWidth : cellHeight;
  radius = Math.round((cellSize / 2) / Math.tan(Math.PI / cellCount));
  for (var i = 0; i < cells.length; i++) {
    var cell = cells[i];
    if (i < cellCount) {
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

let marker = document.querySelector('#marker');
let list = document.querySelectorAll('ul li');

function moveIndicator(e) {
  marker.style.left = e.offsetLeft + 'px';
  marker.style.width = e.offsetWidth + 'px';
}

list.forEach(link => {
  link.addEventListener('mousemove', (e) => {
    moveIndicator(e.target);
    marker.style.display = 'block';
  })
})

function activeLink() {
  list.forEach((item) =>
    item.classList.remove('active'));
  this.classList.add('active');
}

list.forEach((item) =>
  item.addEventListener('mouseover', activeLink));

let vid = document.getElementById("vidon");
let logovid = document.getElementById("logovid");
const video = document.querySelector("#myVideo");

vid.addEventListener('click', function () {
  if (video.paused) {
    video.play();
    logovid.name = "pause-outline";
  } else {
    video.pause();
    logovid.name = "play-outline";
  }
});

if (window.innerWidth <= 900){
  video.pause();
}