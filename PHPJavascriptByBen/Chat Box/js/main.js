submitChat = () => {
	if(form1.uname.value = '' || form1.msg.value = '') {
		alert('All fields are mandatory')
		return
	}
	console.log(form1)
	let uname = form1.uname.value
	let msg = form1.msg.value
	let xmlhttp = new XMLHttpRequest()
	
	xmlhttp.onreadystatechange = () => {
		if(xmlhttp.readyState === 4 && xmlhttp.status === 200)
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText
	}
	xmlhttp.open('GET', 'insert.php?uname=' + uname + '&msg=' + msg, true)
	xmlhttp.send()
}