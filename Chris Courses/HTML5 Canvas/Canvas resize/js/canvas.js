var canvas = document.querySelector('canvas')

canvas.width = window.innerWidth
canvas.height = window.innerHeight

var c = canvas.getContext('2d')
/*
c.fillStyle = 'rgba(255,0,0,0.1)'
c.fillRect(100,100,100,100)
c.fillStyle = 'rgba(0,255,0,0.1)'
c.fillRect(400,200,100,100)
c.fillStyle = 'rgba(0,0,255,0.1)'
c.fillRect(300,300,100,100)

//	Line
c.beginPath()
c.moveTo(50,300)
c.lineTo(500,100)
c.lineTo(400,300)
c.strokeStyle = 'blue'
c.stroke()

//	Arc / Circle
c.beginPath()
c.arc(300, 300, 30, 0, Math.PI * 2, false)
c.strokeStyle = 'brown'
c.stroke()

for(let i = 0; i < 10000; i++) {
	let x = Math.random() * window.innerWidth
	let y = Math.random() * window.innerHeight
	
	c.fillStyle = `rgba(${Math.floor(Math.random() * 255)},${Math.floor(Math.random() * 255)},${Math.floor(Math.random() * 255)},${Math.random() * 1})`
	c.fillRect(	Math.random() * window.innerWidth, 
				Math.random() * window.innerHeight, 
				Math.random() * 64, 
				Math.random() * 64)
	
	
	c.beginPath()
	c.arc(x, y, 30, 0, Math.PI * 2, false)
	c.strokeStyle = 'brown'
	c.stroke()
}
*/

var fraction = 0.98
var mouse = {
	x: undefined,
	y: undefined
}
var maxRadius = 50
var minRadius = 15
var colorArray = [
	'#052620',
	'#96A61C',
	'#D98E04',
	'#D96704',
	'#F25835',
]

window.addEventListener('mousemove', function(event) {
	mouse.x = event.x
	mouse.y = event.y
})
window.addEventListener('resize', function(event) {
	canvas.width = window.innerWidth
	canvas.height = window.innerHeight
	
	init()
})

//	Utility functions
const randomIntFromRange = (min, max) => Math.floor(Math.random() * (max - min + 1) + min)
const randomColor = colors => colors[Math.floor(Math.random() * colors.length)]

function Circle(x, y, dx, dy, radius) {
	this.x = x
	this.y = y
	this.dx = dx
	this.dy = dy
	this.radius = radius
	this.minRadius = this.radius
	this.color = colorArray[Math.floor(Math.random() * colorArray.length)]
	
	this.draw = () => {
		c.beginPath()
		c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
		c.strokeStyle = this.color
		c.fillStyle = this.color
		c.fill()
		c.stroke()
	}
	this.update = () => {
		if(this.x + this.radius > innerWidth || this.x - this.radius < 0)
			this.dx = -this.dx
		if(this.y + this.radius > innerHeight || this.y - this.radius < 0)
			this.dy = -this.dy
		this.x += this.dx
		this.y += this.dy
		
		//	Interactivity
		if(mouse.x - this.x < 50 && mouse.x - this.x > -50 &&
			mouse.y - this.y < 50 && mouse.y - this.y > -50) {
			if(this.radius < maxRadius)
				this.radius += 1;
		} else if(this.radius > this.minRadius) {
			this.radius -= 1;
		}
		
		this.draw()
	}
}

function Ball(x, y, dx, dy, radius, color) {
	this.x = x
	this.y = y
	this.dx = dx
	this.dy = 0
	this.radius = radius + minRadius
	this.color = colorArray[Math.floor(Math.random() * colorArray.length)]
	
	this.draw = () => {
		c.beginPath()
		c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
		c.strokeStyle = this.color
		c.fillStyle = this.color
		c.fill()
		c.stroke()
	}
	this.update = () => {
		if(this.x + this.radius > innerWidth || this.x - this.radius < 0)
			this.dx = -this.dx
		if(this.y + this.radius > innerHeight) {
			this.dy = -this.dy * fraction
		} else {
			this.dy += 1
		}
		this.x += this.dx
		this.y += this.dy
		
		this.draw()
	}
}

var randomize = () => {
	let radius = Math.random() * 20 + 1
	let x = Math.random() * (innerWidth - radius * 2) + radius
	let y = Math.random() * (innerHeight - radius * 2) + radius
	let dx = (Math.random() - 0.5) * 2
	let dy = (Math.random() - 0.5) * 2
	let obj = {
		x: x,
		y: y,
		dx: dx,
		dy: dy,
		radius: radius
	}
	return obj
}

var createObject = Class => {
	let params = randomize()
	console.log(params)
	return new Class(params.x, params.y, params.dx, params.dy, params.radius)
}

var circles = []
var balls = []
var init = () => {
	/*
	circles = []
	for(let i = 0; i < 500; i++) {
		circles.push(createObject(Circle))
	}
	*/
	balls = []
	for(let i = 0; i < 100; i++) {
		balls.push(createObject(Ball))
	}
	
}

var animate = () => {
	requestAnimationFrame(animate)
	c.clearRect(0,0,innerWidth,innerHeight)
	//circles.forEach(circle => circle.update())
	balls.forEach(ball => ball.update())
}


init()
animate()