let counter = document.querySelector('.counter');
const addCount = document.querySelector('#addCountBtn');
const lowerCount = document.querySelector('#lowerCountBtn');
let count = 0;

addCount.addEventListener('click', incrementCounter);
lowerCount.addEventListener('click', decrementCounter);

function incrementCounter() {
	count++;
	counter.innerHTML = count;
	setColor();
}

function decrementCounter() {
	count--;
	counter.innerHTML = count;
	setColor();
}

function setColor() {
	if(counter.innerHTML < '0') {
		counter.style.color = 'red';
	} else if(counter.innerHTML === '0') {
		counter.style.color = 'white';
	} else if(counter.innerHTML > '0') {
		counter.style.color = 'green';
	}
	
	counter.animate([
		{opacity: 0.2}, 
		{opacity: 1.0}], 
		{duration: 100,
		fill: 'forwards'});
}