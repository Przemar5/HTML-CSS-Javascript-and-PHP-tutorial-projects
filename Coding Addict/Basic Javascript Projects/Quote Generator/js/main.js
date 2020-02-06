const quotes = [
{
	name: 'Stephen King',
	quote: 'Get busy living or get busy dying'
}, 
{
	name: 'John F.Kennedy',
	quote: 'Those who dare to fail miserably can achieve greatly.'
},
{
	name: 'Abraham Lincoln',
	quote: 'I\'m a success today because I had a friend who believed in me and I didn\'t have the heart to let him down'
}]

const simpleQuotes = [
{
	name: 'author number 1',
	quote: 'quote number 1'
},
{
	name: 'author number ',
	quote: 'quote number 2'
}
]

const quoteBtn = document.querySelector('#quoteBtn');
const quoteAuthor = document.querySelector('#quoteAuthor');
const quote = document.querySelector('#quote');

quoteBtn.addEventListener('click', displayQuote);

function displayQuote() {
	let number = Math.floor(Math.random() * quotes.length);
	quoteAuthor.innerHTML = quotes[number].name;
	quote.innerHTML = quotes[number].quote;
	
}