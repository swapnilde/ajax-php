var button = document.getElementById("button");
var allbutton = document.getElementById("allbutton");

button.addEventListener('click', showCustomer);

function showCustomer() {

  var inputData = document.getElementById("input").value;
  var finalData = Number(inputData);
  	
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "http://localhost/ajax-php/app.php?q="+finalData, true);
  xhr.onload = function(){
		if(this.status == 200){
			console.log(this.responseText);
			document.getElementById("data").innerHTML += this.responseText;
		}
	 }
	 
	 xhr.send();
}

