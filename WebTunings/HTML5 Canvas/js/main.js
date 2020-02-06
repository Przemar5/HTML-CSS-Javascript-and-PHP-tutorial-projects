const canvas = document.querySelector('canvas')

canvas.width = innerWidth = window.innerWidth
canvas.height = innerHeight = window.innerHeight

//	beginPath
//	closePath
//	lineCap		->	butt, round, square
//	lineJoin	->	miter, round, bevel
//	lineWidth	->	do even
//	fillStyle
//	strokeStyle
//	fillRect
//	strokeRect
//	arc
//	arcTo
//	quadraticCurveTo
//	bezierCurveTo
//	translate
//	scale
//	rotate
//	transform
//	lg = createLinearGradient
//	lg.addColorStop
//	rg = createRadialGradient
//	globalAlpha
//	globalCompositeOperation

var c = canvas.getContext('2d')



//	11	->	put 17
/*
const draw = n => {
	c.clearRect(0, 0, innerWidth, innerHeight)
	c.beginPath()
	for(let column = 0, color = 0; column < 20; column++) {
		for(let row = 0; row < 20; row++) {
			c.fillStyle = 'hsl(' + color + ', 100%, 50%)'
			c.fillRect(column * 25, row * 25, 25, 25)
			color += n
		}
	}
}
*/
//	12
/*
const draw = () => {
	c.beginPath()
	for(let column = 0, color = 0; column < 20; column++) {
		for(let row = 0; row < 20; row++) {
			c.strokeStyle = 'hsl(' + color + ', 100%, 50%)'
			c.strokeRect(column * 27, row * 27, 24, 24)
			color += 17
		}
	}
}
*/
/*
const draw = () => {
	c.beginPath()
	for(let column = 0, color = 0; column < 6; column++) {
		for(let row = 0; row < 6; row++) {
			c.fillStyle = 'hsl(' + color + ', 100%, 50%)'
			c.strokeStyle = 'hsl(' + color + ', 100%, 50%)'
			c.fillRect(column * 100, row * 100, 90, 90)
			c.clearRect(column * 100, row * 100, 70, 70)
			c.fillRect(column * 100, row * 100, 60, 60)
			c.clearRect(column * 100, row * 100, 40, 40)
			c.fillRect(column * 100, row * 100, 30, 30)
			c.clearRect(column * 100, row * 100, 10, 10)
			//c.lineWidth = 8
			//c.strokeRect(column * 100, row * 100, 30, 30)
			color += 17
		}
	}
}
*/
/*
const draw = () => {
	c.beginPath()
	
	for(let column = 1, color = 0; column < 10; column++) {
		for(let row = 1; row < 10; row++) {
			c.beginPath()
			c.strokeStyle = 'hsl(' + color + ',100%,50%)'
			c.lineWidth = 25
			c.lineCap = 'butt'
			c.arc(row * 50, column * 50, 25, 0, Math.PI, false)
			c.stroke()
			color += 20
		}
	}
}

draw()
*/
/*
const draw = () => {
	let distance = 100,
		yLabel = 100,
		radius = 12
	
	for(let x = 100; x < 800; x += distance) {
		let midpoint = x + distance / 2
		c.beginPath()
		c.moveTo(x, yLabel)
		c.quadraticCurveTo(midpoint, 200 * Math.random(), x + distance, yLabel)
		c.arc(midpoint, yLabel, radius, 0, 2 * Math.PI, false)
		c.fillStyle = 'hsl(' + 360 * Math.random() + ',100%,50%)' 
		c.fill()
	}
}

draw()
*/
/*
const draw = () => {
	let n = 3
	
	c.beginPath()
	c.lineWidth = 4
	c.fillStyle = 'hsl(25,100%,50%)'
	c.strokeStyle = 'hsl(25,100%,50%)'
	c.moveTo(600,400)
	
	for(let angle = 0; angle <= 2 * Math.PI; angle += 0.01) {
		let x = 400 + 200 * (Math.pow(Math.sin(n * angle), n) + Math.cos(angle)) * Math.cos(angle)
		let y = 400 + 200 * (Math.pow(Math.sin(n * angle), n) + Math.cos(n * angle)) * Math.sin(angle)
		
		c.lineTo(x, y)
	}
	//c.stroke()
	c.fill()
}

draw()
*/
/*
const draw = () => {
	let maxCircle = 14,
		radius = 50,
		size = 150
	
	c.translate(400, 400)
	c.moveTo(600,400)
	
	for(let i = 1, color = 40; i <= maxCircle; i++, color += 180) {
		c.fillStyle = 'hsl(' + color % 360 + ',100%,50%)'
		c.beginPath()
		c.arc(0, radius, size, 0, 2 * Math.PI, false)
		c.rotate(2 * Math.PI / maxCircle)
		c.fill()
	}
}

draw()
*/
/*
const draw = () => {
	c.beginPath()
	c.fillStyle = 'hsl(' + 360 * Math.random() + ',100%,50%)'
	c.moveTo(0,0)
	c.lineTo(800,800)
	c.stroke()
	
	for(let i = 0; i < 15; i++) {
		c.fillStyle = 'hsl(' + 360 * Math.random() + ',100%,50%)'
		c.setTransform(1,0,0,1,0,0)
		
		let ct = {
			x: Math.random(),
			y: Math.random(),
			r: Math.random()
		}
		
		c.beginPath()
		c.arc(800 * ct.x, 800 * ct.y, 70 * ct.r, 0, 2 * Math.PI, false)
		c.fill()
		
		c.setTransform(0,1,1,0,0,0)
		c.beginPath()
		c.arc(800 * ct.x, 800 * ct.y, 70 * ct.r, 0, 2 * Math.PI, false)
		c.fill()
	}
	
}

draw()
*/
/*
const draw = () => {
	let lg = c.createLinearGradient(0,0,800,800)
	
	for(let offset = 0, color = 0; offset <= 1; offset += 0.2) {
		let colorStop = 'hsl(' + color + ',100%,50%)'
		lg.addColorStop(offset, colorStop)
		color += 60
	}
	c.fillStyle = lg
	c.beginPath()
	c.fillRect(0,0,800,800)
}

draw()
*/
/*
const draw = () => {
	let rg = c.createRadialGradient(150,150,100,150,150,300)
	rg.addColorStop(0, 'white')
	rg.addColorStop(0.5, 'gold')
	rg.addColorStop(1, 'black')
	
	c.fillStyle = rg
	c.beginPath()
	c.arc(400,400,400,0,2*Math.PI,false)
	c.fill()
	
}

draw()
*/
/*
const draw = () => {
	c.globalAlpha = 0.2
	c.fillStyle = 'red'
	c.fillRect(0,0,100,100)
	c.fillRect(50,50,100,100)
	
	c.fillStyle = 'red'
	for(let i = 1, p = 500, f = 40; i < 10; i++) {
		c.beginPath()
		c.moveTo(p, p)
		c.bezierCurveTo(p - i * f, p - i * f, p + i * f, p - i * f, p, p)
		c.fill()
	}
}

draw()
*/

const draw = () => {
	c.globalCompositeOperation = 'xor'
	
	for(let x = 100, y = 600 * Math.random(); x < 800; x += 40) {
		c.fillStyle = 'hsl(' + 360 * Math.random() + ',100%,50%)'
		c.beginPath()
		c.arc(	x * Math.random(),
				y * Math.random(),
				100,
				2 * Math.PI,
				false)
		c.fill()
	}
}

draw()

/*
const d = n => draw(n)
const sleep = ms => new Promise(resolve => setTimeout(resolve, ms))
for(let i = 0; i < 360; i++) {
	sleep()
	draw(i)
}
*/