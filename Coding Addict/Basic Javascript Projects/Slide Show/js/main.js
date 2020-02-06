const prevBtn = document.querySelector('.prevBtn');
const nextBtn = document.querySelector('.nextBtn');
const container = document.querySelector('.images');

let counter = 0;
let max = 4;

prevBtn.addEventListener('click', prevSlide);
nextBtn.addEventListener('click', nextSlide);

function prevSlide() {
	container.animate(	[{opacity: '0.1'}, {opacity: '1'}],
						{duration: 1000, fill: 'forwards'});
	if(counter === 0) {
		counter = max - 1;
	} else {
		counter--;
	}
	container.style.backgroundImage = `url('img/bg-${counter}.jpeg')`;
}

function nextSlide() {
	container.animate(	[{opacity: '0.1'}, {opacity: '1'}],
						{duration: 1000, fill: 'forwards'});
	if(counter === max - 1) {
		counter = 0;
	} else {
		counter++;
	}
	container.style.backgroundImage = `url('img/bg-${counter}.jpeg')`;
}