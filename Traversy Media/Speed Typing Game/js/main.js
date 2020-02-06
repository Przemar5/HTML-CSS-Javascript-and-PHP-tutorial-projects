window.addEventListener('load', init);

// Globals

// Available Levels
const levels = {
	easy: 5,
	medium: 3,
	hard: 2
}

// To change the levels
const currentLevel = levels.easy;

let time = currentLevel;
let score = 0;
let isPlaying;

// DOM Elements
const wordInput = document.querySelector('#word-input');
const currentWord = document.querySelector('#current-word');
const scoreDisplay = document.querySelector('#score');
const timeDisplay = document.querySelector('#time');
const message = document.querySelector('#message');
const seconds = document.querySelector('#seconds');

const words = [
	'programowanie',
	'moc',
	'pewnosc siebie',
	'sila',
	'wszystkomozliwosc'
];

// Initialize Game
function init() {
	// Load word from arrray
	showWord(words);
	// Start matching on word input
	wordInput.addEventListener('input', startMatch);
	// Call countdown every second
	setInterval(countdown, 1000);
	// Check the status
	setInterval(checkStatus, 50);
}

// Pick & show random word
function showWord(words) {
	const randIndex = Math.floor(Math.random() * words.length);
	currentWord.innerHTML = words[randIndex];
}

// Start match
function startMatch() {
	if(matchWords()) {
		isPlaying = true;
		time = currentLevel + 1;
		showWord(words);
		wordInput.value = '';
		score++;
	}
	
	if(score === -1) {
		scoreDisplay.innerHTML = 0;
	} else {
		scoreDisplay.innerHTML = score;
	}
}

// Match currentWord to wordInput
function matchWords() {
	if(wordInput.value === currentWord.innerHTML) {
		message.innerHTML = 'Correct!';
		return true;
	} else {
		message.innerHTML = '';
		return false;
	}
}

// Countdown timer
function countdown() {
	if(time > 0) {
		time--;
	} else if(time === 0) {
		isPlaying = false;
	}
	
	timeDisplay.innerHTML = time;
}

// Check game status
function checkStatus() {
	if(!isPlaying && time === 0) {
		message.innerHTML = 'Game Over!';
		score = -1;
	}
}