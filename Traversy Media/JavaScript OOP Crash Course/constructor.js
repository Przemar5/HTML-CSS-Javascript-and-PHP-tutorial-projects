function Book(title, author, year) {
	this.title = title,
	this.author = author,
	this.year = year
	
	this.getSummary = function() {
		return `${this.title} was written by ${this.author} in ${this.year}`;
	}
}

Book.prototype.getSummary = function() {
	return `${this.title} was written by ${this.author} in ${this.year}`;
}

Book.prototype.getAge = function() {
	const years = new Date().getFullYear() - this.year;
	return `${this.title} is ${years} years old`;
}

Book.prototype.revise = function(newYear) {
	this.year = newYear;
	this.revised = true;
}

function Magazine(title, author, year, month) {
	Book.call(this, title, author, year);
	
	this.month = month;
}

Magazine.prototype = Object.create(Book.prototype);

const mag1 = new Magazine('Mag One', 'John Doe', '2018', 'Jan');

console.log(mag1);

const book3 = new Book('Book One', 'Jon Doe', ' 2013');
const book4 = new Book('Book Two', 'Jon Doe', ' 2016');

console.log(book2);
book2.revise('2018');
console.log(book2);


const bookProtos = {
	getSummary: function() {
		return `${this.title} was written by ${this.author} in ${this.year}`;
	},
	
	getAge: function() {
		const years = new Date().getFullYear() - this.year;
		return `${this.title} is ${years} years old`;
	}
}

const book5 = Object.create(bookProtos);
book5.title = 'Book Five'
book5.author = 'John Doe'
book5.year = '2013'

const book6 = Object.create(bookProtos, {
	title: {value: 'Book Siz'},
	author: {value: 'Jon Doe'},
	year: {value: '2013'}
});

/*
class Book = {
	constructor(title, author, year) {
		this.title = title;
		this.author = author;
		this.year = year;
	}
	
	getSummary() {
		return `${this.title} was written by ${this.author} in ${this.year}`;
	}
	
	getAge() {
		const years = new Date().getFullYear() - this.year;
		return `${this.title} is ${years} years old`;
	}
	
	revise(newYear) {
		this.year = newYear;
		this.revised = true;
	}
	
	static topBookStore() {
		return 'Barnes & Noble';
	}
}

const book7 = new Book('Book Seven', 'Jon Doe', '2013');

console.log(Book.topBookStore());
*/

//console.log(book7)

class Magazine extends Book {
	constructor(title, author, year, month) {
		super(title, author, year);
		this.month = month;
	}
}

const mag2 = new Magazine('Mag Two', 'Jon Doe', '2018', 'Feb');

console.log(mag2.getSummary());