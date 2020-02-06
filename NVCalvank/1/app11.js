const apply = (fun1, fun2) => fun2(fun1);
const compose = (val, arr) => arr.reduce(apply, val);



//	COMPOSING BOOLEANS FOR CODE CLARITY

const head = (x, ...xs) => x;
const tail = (x, ...xs) => xs;
const reduceVals = fun => (...vals) => tail(vals).reduce(fun, head(vals));

const and = (a, ...b) => a && b;

let whenIs = str => {
	let today 	= new Date();
	let day 	= today.getDate();
	let month 	= today.getMonth();
	let year 	= today.getFullYear();
	let [iDay, iMonth, iYear] = str.split('-').map(Number);
	
	let isYear 	= year === iYear;
	let isMonth = month === iMonth;
	let isDay 	= day === iDay;
	
	let isThisYear 	= and(isYear);
	let isThisMonth = and(isYear, isMonth);
	let isToday 	= and(isYear, isMonth, isDay);
	
	if(isToday) 			{return 'Today'}
	else if(isThisMonth) 	{return 'This month'}
	else if(isThisYear)		{return 'This year'}
	else					{return 'Not this year'}
}



//	RECURSION - THE BASICS

var words = ['I', 'know', 'recursion']

var joinWithSpace = (x, y) => {
    `${x} ${y}`
}

function join([x, y, ...ys]) {
	return	x === undefined ? ''
		:	y === undefined ? x
		:	ys.length === 0 ? `${joinWithSpace(x, y)}!`
		:	joinWithSpace(x, join([y, ...ys]))
}



const places = [
	['United States'],
	['Canada', 'Ontario', 'Toronto'],
	['Canada', 'Ontario', 'London'],
	['Canada', 'Ontario', 'Sarnia'],
	['United States', 'Tennessee', 'Chattanooga'],
	['United States', 'Georgia', 'Atlanta'],
	['Canada', 'British Columbia', 'Victoria']
]

const result = buildTree(places)

function buildTree(arr) {
	return arr.reduce(buildBranch, {})
	
	function buildBranch(branch, [location, ...rest]) {
		let newNode = {},
			hasMatchingNode = Object.keys(branch).indexOf(location) !== -1,
			parentNode = hasMatchingNode ? branch[location] : newNode
		
		return	location === undefined ? newNode
			:	Object.assign(branch, {[location]: buildBranch(parentNode, rest)})
	}
}



//	TAIL RECURSION

function size([x, ...xs], count = 0) {
	return	x === undefined ? count
		:	size(xs, count + 1)
}



//	BINARY TREE

const nums2 = [5,3,4,5,6,9,10,2]
const builtTree = buildTree(nums2)
const transformedTree = treeMap(add2, builtTree)

function buildTree(arr) {
	return arr.reduce(insertValue, {})
}

function insertValue(tree = {}, value) {
	const newNode = {data: value}
	const path = value < tree.data ? 'left' : 'right'
	const parentNode = tree[path]
	return	tree.data === undefined ? newNode
		:	Object.assign(tree, {[path]: insertValue(parentNode, value)})
}

function treeMap(fn, tree) {
	const left = tree.left === undefined ? {} : {left: treeMap(fn, tree.left)}
	const right = tree.right === undefined ? {} : {right: treeMap(fn, tree.right)}
	return	tree === undefined ? {}
		:	Object.assign({data: fn(tree.data)}, left, right)
}

function branchMap(fn, tree, path) {
	return tree[path] === undefined ? {} : {[path]: treeMap(fn, tree[path])}
}