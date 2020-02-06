
function brakeChain() {
	let chain = document.getElementById('chain');
	chain.innerHTML = '&#xf0c1;';
	
	setTimeout(function() {
		chain.innerHTML = '&#xf127;';
	}, 1000);
}

brakeChain();

setInterval(brakeChain, 2000);



function chargeBattery() {
	let battery = document.getElementById('battery');
	
	for(let i = 0; i < 5; i++) {
		setTimeout(function() {
			battery.innerHTML = `&#xf24${4 - i};`;
		}, i * 1000);
	}
}

chargeBattery();

setInterval(chargeBattery, 5000);



function hourglassTip() {
	let hourglas = document.getElementById('hourglass');
	hourglass.innerHTML = '&#xf251;';
	
	setTimeout(function() {
		hourglass.innerHTML = '&#xf252;';
	}, 1000);
	
	setTimeout(function() {
		hourglass.innerHTML = '&#xf253;';
	}, 2000);
}

hourglassTip();

setInterval(hourglassTip, 3000);