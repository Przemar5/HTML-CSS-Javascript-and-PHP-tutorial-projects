const hexNumbers = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];
const hexBtn = document.querySelector('.hexBtn');
const bodyBcg = document.querySelector('body');
const hex = document.querySelector('.hex');

hexBtn.addEventListener('click', getHex);

function getHex() {
	let hexCol = '#';
	let hexCol2 = '#';
	
	for(let i = 0; i < 6; i++) {
		let random = Math.floor(Math.random() * hexNumbers.length);
		hexCol = hexCol + hexNumbers[random];
		hexCol2 = hexCol + hexNumbers[hexNumbers.length - random];
	}
	
	bodyBcg.style.backgroundColor = hexCol;
	hex.style.color = hexCol2;
	
	hex.innerHTML = hexCol;
}

