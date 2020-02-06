'use strict';

let nums = [1,2,3,4,5,6,7,8,9,10];

let sum = (a, b) => a + b;
let sumAll = (x, ...args) => {
	if(!x)		{	return 0;	}
	if(!args)	{	return x;	}
	return		sum(x, sumAll(...args));
}