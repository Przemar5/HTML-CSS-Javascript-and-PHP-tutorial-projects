function createList() {
	var s;
	s = '<ul>'
		+	'<li>Black Swan</li>'
		+	'<li>Hitler Kaput</li>'
		+	'<li>Nothing funny</li>'
		+	'<li>Miś</li>'
	+	'</ul>';
	
	divMovies = document.getElementById('divMovies');
	divMovies.innerHTML = s;
}