"use strict"


function ajax(){
	// const booktitle = document.getElementById('booktitle').value;
	const xhttp	= new XMLHttpRequest();
    xhttp.open('GET', '../View/librarianLogCheck.php', true);
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('login').innerHTML = this.responseText;
		}
	}
}