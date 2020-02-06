var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject() {
	var xmlHttp;
	
	if(window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest;
	
	} else {
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	
	return xmlHttp;
}

function process() {
	if(xmlHttp) {
		try {
			xmlHttp.open('GET', 'action.txt', true);
			xmlHttp.onreadystatechange = handleStateChange;
			xmlHttp.send(null);
			
		} catch(e) {
			alert(e.toString());
		}
	}
}

function handleStateChange() {
	 if(xmlHttp.readyState == 4) {
		if(xmlHttp.status == 200) {
			try {
				handleResponse();
				
			} catch(e) {
				alert(e.toString());
			}
			
		} else {
			alert(xmlHttp.statusText);
		}
	}
}

function handleResponse() {
	var xmlResponse = xmlHttp.responseXML;
	root = xmlResponse.documentElement;
	names = root.getElementsByTagName('name');
	ssns = root.getElementsByTagName('ssn');
}