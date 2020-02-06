/*
const s1 = 'Hello';
console.log(typeof s1);

const s2 = new String('Hello');
console.log(typeof s2);

console.log(window);
window.alert(1);

console.log(navigator.appVersion);
*/

//	Object literal
const book1 = {
	title: 'Book One',
	author: 'Jon Doe',
	year: '2013',
	getSummary: function() {
		return `${this.title} was written by ${this.author} in ${this.year}`;
	}
};

const book2 = {
	title: 'Book One',
	author: 'Jon Doe',
	year: '2013',
	getSummary: function() {
		return `${this.title} was written by ${this.author} in ${this.year}`;
	}
};

//console.log(book1.getSummary());
//console.log(book1.values);
//console.log(book1.keys);

