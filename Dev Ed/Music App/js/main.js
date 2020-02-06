window.addEventListener('load', () => {
	const sounds = document.querySelectorAll('.sound');
	const pads = document.querySelectorAll('.pads div');
	const visual = document.querySelector('.visual');
	conset colors = [
		'#60de94',
		'#d35060',
		'#c060d3',
		'#d3d160',
		'#6860d3',
		'#60b2d3',
	]
	/*
	pads.forEach((pad, index) => {
		pad.addEventListener('click', function() {
			sounds[index].currentTime = 0;
			sounds[index].play();
		});
	});
	*/
	const createBubbles = () => {
		const bubble = document.createElement('div');
		visual.appendChild(bubble);
		bubble.style.backgroundColor = colors[index];
		bubble.style.animation = 'jump is ease';
		bubble.addEventListener('animationed', function() {
			visual.removeChild(this);
		});
	}
});