// Initial Ratings
const ratings = {
	sony:		4.7,
	samsung:	3.4,
	vizio:		2.3,
	panasonic:	3.6,
	phillips:	4.1
}

// Total stars
const starsTotal = 5;

document.addEventListener('DOMContentLoaded', getRatings);

// Get Ratings
function getRatings() {
	for(let rating in ratings) {
		// Get percentage
		const starPercentage = (ratings[rating] / starsTotal) * 100
		const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;
		
		// Set width of stars-inner to percentage
		document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded;
	}
}