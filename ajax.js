var button = document.getElementById("button");
var submitButton = document.getElementById("submit-button");


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


submitButton.addEventListener('click', getUsers);

function getUsers(e){

    e.preventDefault();

    var formData = new FormData(myForm);
   
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ajax-php/app2.php", true);
    xhr.onload = function(){
		if(this.status == 200){
			console.log(this.responseText);
			document.getElementById("form-data").innerHTML += this.responseText;
		}
	 }

     //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xhr.send(formData);
  
}

