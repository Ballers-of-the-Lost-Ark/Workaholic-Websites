let carouselHeight = document.querySelector('.carousel').clientHeight;
carouselHeight = carouselHeight.toString();

document.querySelector('.images').style.height = carouselHeight.concat('px');