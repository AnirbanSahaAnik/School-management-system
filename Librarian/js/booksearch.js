"use strict"


function ajax(){
	const booktitle = document.getElementById('booktitle').value;
	const xhttp	= new XMLHttpRequest();
    xhttp.open('POST', '../View/booksearch.php?booktitle='+booktitle, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}
}