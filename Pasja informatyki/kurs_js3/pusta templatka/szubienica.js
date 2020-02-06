var ourPhrase = "Bez pracy nie ma kołaczy";
ourPhrase = ourPhrase.toUpperCase();

var pLength = ourPhrase.length;
var failures = 0;

var yes = new Audio("yes.wav");
var no = new Audio("no.wav");

var ourPhrase1 = "";

for(i = 0; i < pLength; i++) {
	if(ourPhrase.charAt(i) == " ")
		ourPhrase1 = ourPhrase1 + " ";
	else
		ourPhrase1 = ourPhrase1 + "-";
}


function showPhrase() {
	document.getElementById("phrase").innerHTML = ourPhrase1;
}

window.onload = start;

var letters = new Array(35);


letters[0] = "A";
letters[1] = "Ą";
letters[2] = "B";
letters[3] = "C";
letters[4] = "Ć";
letters[5] = "D";
letters[6] = "E";
letters[7] = "Ę";
letters[8] = "F";
letters[9] = "G";
letters[10] = "H";
letters[11] = "I";
letters[12] = "J";
letters[13] = "K";
letters[14] = "L";
letters[15] = "Ł";
letters[16] = "M";
letters[17] = "N";
letters[18] = "Ń";
letters[19] = "O";
letters[20] = "Ó";
letters[21] = "P";
letters[22] = "Q";
letters[23] = "R";
letters[24] = "S";
letters[25] = "Ś";
letters[26] = "T";
letters[27] = "U";
letters[28] = "V";
letters[29] = "W";
letters[30] = "X";
letters[31] = "Y";
letters[32] = "Z";
letters[33] = "Ź";
letters[34] = "Ż";


//	Alternative version

var letters2 = "AĄBCĆDEĘFGHIJKLŁMNŃOÓPQRSŚTUVWXYZŹŻ";

function start() {
	var divContent = "";
	
	for(i = 0; i < letters2.length; i++) {
		divContent = divContent + '<div class="letter" onclick="check(' + i + ')"id="let' + i + '">' + letters2.charAt(i) + '</div>';
		
		if(i % 7 == 6)
			divContent = divContent + '<div style="clear:both;"></div>';
	}
	
	document.getElementById("alphabet").innerHTML = divContent;
	showPhrase();
}

String.prototype.setCharAt = function(pos, charAdded) {
	if(pos > this.length - 1 || pos < 0)
		return this.toString();
	else
		return this.substr(0, pos) + charAdded + this.substr(pos + 1);
}

function check(nr) {
	var isIn = false;
	
	for(i = 0; i < letters2.length; i++) {
		if(ourPhrase.charAt(i) == letters2.charAt(nr)) {
			ourPhrase1 = ourPhrase1.setCharAt(i, letters2.charAt(nr));
			isIn = true;
		}
	}
	
	if(isIn == true) {
		yes.play();
		
		var element = "let" + nr;
		document.getElementById(element).style.background = "#003300";
		document.getElementById(element).style.color = "#00C000";
		document.getElementById(element).style.border = "3px solid #00C000";
		document.getElementById(element).style.cursor = "default";
		
		showPhrase();
	} else {
		no.play();
		
		var element = "let" + nr;
		document.getElementById(element).style.background = "#330000";
		document.getElementById(element).style.color = "#C00000";
		document.getElementById(element).style.border = "3px solid #C00000";
		document.getElementById(element).style.cursor = "default";
		document.getElementById(element).setAttribute("onclick", ";");
		
		//	failure
		failures++;
		
		var picture = "img/s" + failures + ".jpg";
		document.getElementById("hangman").innerHTML = '<img src="' + picture + '" alt="hangman">';
	}
	
	
	//	Check win
	if(ourPhrase == ourPhrase1) {
		document.getElementById("alphabet").innerHTML = 
				"Wygrana! Hasło brzmi: " + ourPhrase + 
				'<br><br><span class="reset" onclick="location.reload()">JESZCZE RAZ?</span>';
	}
	
	if(failures == 9) {
		document.getElementById("alphabet").innerHTML = 
				"Nie udało ci się odgadnąć hasła! Hasło brzmi: " + ourPhrase + 
				'<br><br><span class="reset" onclick="location.reload()">JESZCZE RAZ?</span>';
	}
}
