function gametime() {
	title = document.createTextNode('Here is some text');
	list = document.createElement('ul');
	
	item1 = document.createElement('li');
	text1 = document.createTextNode('This is the text');
	item1.appendChild(text1);
	
	item2 = document.createElement('li');
	text2 = document.createTextNode('Next text');
	item2.appendChild(text2);
	
	item3 = document.createElement('li');
	text3 = document.createTextNode('More text');
	item3.appendChild(text3);
	
	list.appendChild(item1);
	list.appendChild(item2);
	list.appendChild(item3);
	
	theD = document.getElementById('theD');
	theD.appendChild(title);
	theD.appendChild(list);
}