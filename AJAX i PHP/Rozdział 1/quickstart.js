var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject() {
	var xmlHttp;
	//	below IE6
	if(window.ActiveXObject) {
		try {
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch(e) {
			xmlHttp = false;
		}
	} else {
		try {
			xmlHttp = new XMLHttpRequest();
		} catch(e) {
			xmlHttp = false;
		}
	}
	
	if(!xmlHttp) {
		alert("ERROR: cannot create XMLHttp object");
	} else {
		return xmlHttp;
	}
}

function process() {
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
		name = encodeURIComponent(document.getElementById('myName').value);
		xmlHttp.open('GET', 'quickstart.php?name=' + name, true);
		xmlHttp.onreadystatechange = handleServerResponse;
		xmlHttp.send(null);
	
	} else {
		setTimeout('process()', 1000);
	}
}

function handleServerResponse() {
	//	Transakcja zakończona
	if(xmlHttp.readyState == 4) {
		//	Sukces
		if(xmlHttp.status == 200) {
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			helloMessage = xmlDocumentElement.firstChild.data;
			document.getElementById('divMessage').innerHTML = 
				'<i>' + helloMessage + '</i>';
			setTimeout('process()', 1000);
		
		} else {
			alert("ERROR: cannot connect to server: " + xmlHttp.statusText);
		}
	}
}