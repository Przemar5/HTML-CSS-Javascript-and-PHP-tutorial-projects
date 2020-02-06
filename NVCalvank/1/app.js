const name = function() {
	return function() {
		return 'Przemo';
	}
}

console.log(name);
console.log(name());
console.log(name()());


const addThat = function(m) {
	return function(n) {
		return n + m;
	}
}

console.log(addThat(2)(3));


const add3 = addThat(3);
console.log(add3);